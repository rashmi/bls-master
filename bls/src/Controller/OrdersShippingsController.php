<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrdersShippings Controller
 *
 * @property \App\Model\Table\OrdersShippingsTable $OrdersShippings
 */
class OrdersShippingsController extends AppController
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
            'contain' => ['Orders']
        ];
        $ordersShippings = $this->paginate($this->OrdersShippings);

        $this->set(compact('ordersShippings'));
        $this->set('_serialize', ['ordersShippings']);
    }

    /**
     * View method
     *
     * @param string|null $id Orders Shipping id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordersShipping = $this->OrdersShippings->get($id, [
            'contain' => ['Orders']
        ]);

        $this->set('ordersShipping', $ordersShipping);
        $this->set('_serialize', ['ordersShipping']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordersShipping = $this->OrdersShippings->newEntity();
        if ($this->request->is('post')) {
            $ordersShipping = $this->OrdersShippings->patchEntity($ordersShipping, $this->request->data);
            if ($this->OrdersShippings->save($ordersShipping)) {
                $this->Flash->success(__('The orders shipping has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders shipping could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersShippings->Orders->find('list', ['limit' => 200]);
        $this->set(compact('ordersShipping', 'orders'));
        $this->set('_serialize', ['ordersShipping']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orders Shipping id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordersShipping = $this->OrdersShippings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordersShipping = $this->OrdersShippings->patchEntity($ordersShipping, $this->request->data);
            if ($this->OrdersShippings->save($ordersShipping)) {
                $this->Flash->success(__('The orders shipping has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orders shipping could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrdersShippings->Orders->find('list', ['limit' => 200]);
        $this->set(compact('ordersShipping', 'orders'));
        $this->set('_serialize', ['ordersShipping']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orders Shipping id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordersShipping = $this->OrdersShippings->get($id);
        if ($this->OrdersShippings->delete($ordersShipping)) {
            $this->Flash->success(__('The orders shipping has been deleted.'));
        } else {
            $this->Flash->error(__('The orders shipping could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
