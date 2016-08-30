<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
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
            'contain' => ['ProductsAttrs.Brands', 'Categories','ProductsImages.Colors','ProductsAttrs', 'ProductsImages', 'ProductsPrices']
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
    {	
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
			
		//	debug($this->request->data);
		//	die;
	
		$product = $this->Products->patchEntity($product, $this->request->data,[
			'associated' => ['ProductsAttrs.Brands', 'Categories', 'ProductsAttrs', 'ProductsPrices']
							]);  
							
	$result = $this->Products->save($product);
    if ($result) { 
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
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            } 
        }
        //$brands = $this->Products->Brands->find('list', ['limit' => 200]);
		$colors = $this->Products->ProductsImages->Colors->find('list', ['limit' => 200]);
        $categories = $this->Products->Categories->find('treeList');
      
        $this->set(compact('product','colors', 'orders', 'ProductsAttrs.Brands', 'categories'));
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
        $product = $this->Products->get($id, [
            'contain' => [ 'ProductsAttrs.Brands', 'Categories', 'ProductsAttrs',  'ProductsPrices', 'ProductsImages', 'ProductsImages.Colors']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            if ($this->Products->save($product)) {
                $this->Flash->success(__('The product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
     /*    $orders = $this->Products->Orders->find('list', ['limit' => 200]); */
        //$brands = $this->Products->Brands->find('list', ['limit' => 200]);
        $categories = $this->Products->Categories->find('list', ['limit' => 200]);
		$colors = $this->Products->ProductsImages->Colors->find('list', ['limit' => 200]);
        $this->set(compact('product', 'orders', 'colors', 'ProductsAttrs.Brands', 'categories', 'ProductsAttrs', 'ProductsPrices', 'ProductsImages', 'ProductsImages.Colors'));
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
