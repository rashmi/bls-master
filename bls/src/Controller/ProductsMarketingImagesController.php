<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
/**
 * ProductsMarketingImages Controller
 *
 * @property \App\Model\Table\ProductsMarketingImagesTable $ProductsMarketingImages
 */
class ProductsMarketingImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $productsMarketingImages = $this->paginate($this->ProductsMarketingImages);

        $this->set(compact('productsMarketingImages'));
        $this->set('_serialize', ['productsMarketingImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Marketing Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsMarketingImage = $this->ProductsMarketingImages->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productsMarketingImage', $productsMarketingImage);
        $this->set('_serialize', ['productsMarketingImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsMarketingImage = $this->ProductsMarketingImages->newEntity();
        if ($this->request->is('post')) {
            $productsMarketingImage = $this->ProductsMarketingImages->patchEntity($productsMarketingImage, $this->request->data);
            if ($this->ProductsMarketingImages->save($productsMarketingImage)) {
                $this->Flash->success(__('The products marketing image has been saved.'));
               // return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products marketing image could not be saved. Please, try again.'));
            }
        return $this->redirect( Router::url( $this->referer(), true ) );
		}
        $products = $this->ProductsMarketingImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsMarketingImage', 'products'));
        $this->set('_serialize', ['productsMarketingImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Marketing Image id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsMarketingImage = $this->ProductsMarketingImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsMarketingImage = $this->ProductsMarketingImages->patchEntity($productsMarketingImage, $this->request->data);
            if ($this->ProductsMarketingImages->save($productsMarketingImage)) {
                $this->Flash->success(__('The products marketing image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products marketing image could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsMarketingImages->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsMarketingImage', 'products'));
        $this->set('_serialize', ['productsMarketingImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Marketing Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsMarketingImage = $this->ProductsMarketingImages->get($id);
        if ($this->ProductsMarketingImages->delete($productsMarketingImage)) {
            $this->Flash->success(__('The products marketing image has been deleted.'));
        } else {
            $this->Flash->error(__('The products marketing image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
	public function deleteimage($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsMarketingImage = $this->ProductsMarketingImages->get($id);
		$product_id=$productsMarketingImage->product_id;
		
        if ($this->ProductsMarketingImages->delete($productsMarketingImage)) {
            $this->Flash->success(__('The products image has been deleted.'));
        } else {
            $this->Flash->error(__('The products image could not be deleted. Please, try again.'));
			
        }
       return $this->redirect(['controller'=>'Products', 'action' => 'edit', $product_id]);
    }
}
