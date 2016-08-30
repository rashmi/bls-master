<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{
	
	public $helpers = ['Form', 'Html'];
	public function initialize()
		{
			parent::initialize();
			
			// Set the layout
			$this->viewBuilder()->layout('admin');
			$this->loadComponent('Cewi/Excel.Import');
		}
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $products = $this->paginate($this->Products);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }
	
    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => [ 'Categories', 'ProductsAttrs','ProductsAttrs.Brands', 'ProductsImages','ProductsImages.Colors' , 'ProductsMarketingImages', 'ProductsPrices', 'ProductsRelateds', 'ProductsRelateds.relatedproduct1', 'ProductsRelateds.relatedproduct2', 'ProductsRelateds.relatedproduct3']
        ]);
        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {	$Brands = TableRegistry::get('Brands');	
		$Configrations = TableRegistry::get('Configrations');
		
		
		$product = $this->Products->newEntity();
        if ($this->request->is('post')) {

			$this->request->data['item_code']='TRGWSS';
			$this->request->data['status']=0;
			
			
		$item_codes[]=$this->request->data['products_related']['relatedproduct1']['item_code'];		
		$item_codes[]=$this->request->data['products_related']['relatedproduct2']['item_code'];		
		$item_codes[]=$this->request->data['products_related']['relatedproduct3']['item_code'];		



		foreach($item_codes as $key => $item_code){
		$key++;
		$query = $this->Products->find('all', ['conditions'=>['products.item_code'=>$item_code], 'fields'=>['id','item_code']]);
		$related_data = $query->toArray();
					if(count($related_data)>0){
					$this->request->data['products_related']['related_product_'.$key]= $related_data[0]['id'];	
					}else
					{
						$this->request->data['products_related']['related_product_'.$key]=0;
					}
		}
			
	
	$product = $this->Products->patchEntity($product, $this->request->data,[
			'associated' => ['ProductsAttrs', 'Categories', 'ProductsAttrs', 'ProductsPrices','ProductsRelateds', 'ProductsCategories', 'ProductsImages','ProductsMarketingImages']
			]);  
			
		debug($product);
		die;
			
	$result = $this->Products->save($product);
			if ($result){ 
			die('yes');
							$id = $result->id;	
							$ProductsImages = TableRegistry::get('ProductsImages'); 
							$count=1;	
							foreach($this->request->data['products_image']['file'] as  $filekey => $file){
											
									foreach($file['image'] as  $key => $image){
										$this->request->data['products_image'][$count]['color_id']=$file['color_id'];
										$this->request->data['products_image'][$count]['image_dir']=$file['image_dir'];
										$this->request->data['products_image'][$count]['product_id']= $id;
										$this->request->data['products_image'][$count]['image']=$image;							
										$count++; 	
									}			
							}			
							unset($this->request->data['products_image']['file']);
							foreach($this->request->data['products_image'] as $image_photo){
									
									$aa = $ProductsImages->newEntity();
									$aa = $ProductsImages->patchEntity($aa,$image_photo);
									$ProductsImages->save($aa);
								} 
							$this->Flash->success(__('The product has been saved.'));
							return $this->redirect(['action' => 'index']);
				} else {
					
			die('no');		
							$this->Flash->error(__('The product could not be saved. Please, try again.'));
						} 	
						
            
			
			
        }
		
		$configs = $Configrations->find();
		$config =  $configs->first();
		$main_promos[0]='';
		$main_promos[$config->promo_page_1]=$config->promo_page_1;
		$main_promos[$config->promo_page_2]=$config->promo_page_2;
		$main_promos[$config->promo_page_3]=$config->promo_page_3;
		
		
		
		
		$brands = $Brands->find('list', ['limit' => 200]);
		$colors = $this->Products->ProductsImages->Colors->find('list', ['limit' => 200]);
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'colors', 'brands', 'main_promos'));
        $this->set('_serialize', ['product']);
    }
	
	public function bulkadd(){
		 $error=""; 
		 $Categories = TableRegistry::get('Categories');
		
		
		$product = $this->Products->newEntity();
		if ($this->request->is('post')) {
		$datas = $this->Import->prepareEntityData($this->request->data['content']['tmp_name']);
		
		/*  if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }  */
	
	
		foreach($datas as $key => $data){
				$key = $key+1;
				$exists_cats = $Categories->exists(['name' => $data['Category - Main']]);
				if($exists_cats){
					$Cats = $Categories->find()->where(['name' => $data['Category - Main']]); 
					$Cat = $Cats->first();	 
					
				$error .= 'Record no.'. $key .': Category "'. $data['Category - Main']  .'" found.</br>'; 

								$exists_cats_subs = $Categories->exists(['name' => $data['Category - Sub']]);
								if($exists_cats_subs){
									$Cats_subs = $Categories->find()->where(['name' => $data['Category - Sub']]); 
									$Cat_sub = $Cats_subs->first();
									$error .= 'Record no.'. $key .': Sub Category "'. $data['Category - Sub']  .'" found.</br>'; 
								}else{	
									$error .= 'Record no.'. $key .': Sub Category "'. $data['Category - Sub']  .'" not found.</br>'; 
								}
					
				}else{	
					$error .= 'Record no.'. $key .': Category "'. $data['Category - Main']  .'" not found.</br>'; 
				}	
				
				
					
				
		echo "</br>";		
		}
		
		echo $error; 
		
		die;
			
			
		}
		$this->set('product', $product);
        $this->set('_serialize', ['product']);
		
}

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {	
		$Brands = TableRegistry::get('Brands');	
        $product = $this->Products->get($id, [
            'contain' => ['ProductsCategories', 'ProductsAttrs','ProductsAttrs.Brands', 'ProductsImages','ProductsImages.Colors' , 'ProductsMarketingImages', 'ProductsPrices', 'ProductsRelateds', 'ProductsRelateds.relatedproduct1', 'ProductsRelateds.relatedproduct2', 'ProductsRelateds.relatedproduct3', 'Promotions']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
			
	$item_codes[]=$this->request->data['products_related']['relatedproduct1']['item_code'];		
	$item_codes[]=$this->request->data['products_related']['relatedproduct2']['item_code'];		
	$item_codes[]=$this->request->data['products_related']['relatedproduct3']['item_code'];		
	
	
	
	foreach($item_codes as $key => $item_code){
	$key++;
	$query = $this->Products->find('all', ['conditions'=>['products.item_code'=>$item_code], 'fields'=>['id','item_code']]);
	$related_data = $query->toArray();
				if(count($related_data)>0){
				$this->request->data['products_related']['related_product_'.$key]= $related_data[0]['id'];	
				}else{
				$this->request->data['products_related']['related_product_'.$key]=0;
				}
	}
	 			
        $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
		return $this->redirect( Router::url( $this->referer(), true ) );	
        }
		
		$Configrations = TableRegistry::get('Configrations');
		$configs = $Configrations->find();
		$config =  $configs->first();
		$main_promos[0]='';
		$main_promos[$config->promo_page_1]=$config->promo_page_1;
		$main_promos[$config->promo_page_2]=$config->promo_page_2;
		$main_promos[$config->promo_page_3]=$config->promo_page_3;
		
        $brands = $Brands->find('list', ['limit' => 200]);
		$colors = $this->Products->ProductsImages->Colors->find('list', ['limit' => 200]);
		$childproducts = $this->Products->find('list', ['limit' => 200]);
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
        $this->set(compact('product', 'categories', 'brands', 'colors', 'main_promos', 'childproducts'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}
