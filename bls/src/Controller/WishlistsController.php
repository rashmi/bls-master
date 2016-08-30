<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wishlists Controller
 *
 * @property \App\Model\Table\WishlistsTable $Wishlists
 */
class WishlistsController extends AppController
{	
	public $helpers = ['Form', 'Html'];
	public function initialize()
		{
			parent::initialize();
			
			// Set the layout
			$this->viewBuilder()->layout('admin');
			//$this->Auth->allow();  
		}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Products']
        ];
        $wishlists = $this->paginate($this->Wishlists);

        $this->set(compact('wishlists'));
        $this->set('_serialize', ['wishlists']);
    }

    /**
     * View method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wishlist = $this->Wishlists->get($id, [
            'contain' => ['Users', 'Products']
        ]);

        $this->set('wishlist', $wishlist);
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wishlist = $this->Wishlists->newEntity();
        if ($this->request->is('post')) {
            
			$wishlist = $this->Wishlists->patchEntity($wishlist, $this->request->data);

            if ($this->Wishlists->save($wishlist)) {
                $this->Flash->success(__('The wishlist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
            }
        }
        $users = $this->Wishlists->Users->find('list', ['limit' => 200]);
        $products = $this->Wishlists->Products->find('list', ['limit' => 200]);
        $this->set(compact('wishlist', 'users', 'products'));
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wishlist = $this->Wishlists->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wishlist = $this->Wishlists->patchEntity($wishlist, $this->request->data);
            if ($this->Wishlists->save($wishlist)) {
                $this->Flash->success(__('The wishlist has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The wishlist could not be saved. Please, try again.'));
            }
        }
        $users = $this->Wishlists->Users->find('list', ['limit' => 200]);
        $products = $this->Wishlists->Products->find('list', ['limit' => 200]);
        $this->set(compact('wishlist', 'users', 'products'));
        $this->set('_serialize', ['wishlist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wishlist id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wishlist = $this->Wishlists->get($id);
        if ($this->Wishlists->delete($wishlist)) {
            $this->Flash->success(__('The wishlist has been deleted.'));
        } else {
            $this->Flash->error(__('The wishlist could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
