<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdersProducts Controller
 *
 * @property \App\Model\Table\OrdersProductsTable $OrdersProducts
 */
class OrdersProductsController extends AppController
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
        $this->paginate = [
            'contain' => ['Orders', 'Products']
        ];
        $ordersProducts = $this->paginate($this->OrdersProducts);

        $this->set(compact('ordersProducts'));
        $this->set('_serialize', ['ordersProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Orders Product id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordersProduct = $this->OrdersProducts->get($id, [
            'contain' => ['Orders', 'Products']
        ]);

        $this->set('ordersProduct', $ordersProduct);
        $this->set('_serialize', ['ordersProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordersProduct = $this->OrdersProducts->newEntity();
        if ($this->request->is('post')) {
            $ordersProduct = $this->OrdersProducts->patchEntity($ordersProduct, $this->request->data);
            if ($this->OrdersProducts->save($ordersProduct)) {
                $this->Flash->success(__('The orders product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders product could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersProducts->Orders->find('list', ['limit' => 200]);
        $products = $this->OrdersProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('ordersProduct', 'orders', 'products'));
        $this->set('_serialize', ['ordersProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orders Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordersProduct = $this->OrdersProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordersProduct = $this->OrdersProducts->patchEntity($ordersProduct, $this->request->data);
            if ($this->OrdersProducts->save($ordersProduct)) {
                $this->Flash->success(__('The orders product has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders product could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersProducts->Orders->find('list', ['limit' => 200]);
        $products = $this->OrdersProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('ordersProduct', 'orders', 'products'));
        $this->set('_serialize', ['ordersProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orders Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordersProduct = $this->OrdersProducts->get($id);
        if ($this->OrdersProducts->delete($ordersProduct)) {
            $this->Flash->success(__('The orders product has been deleted.'));
        } else {
            $this->Flash->error(__('The orders product could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
