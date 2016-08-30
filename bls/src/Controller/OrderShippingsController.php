<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrderShippings Controller
 *
 * @property \App\Model\Table\OrderShippingsTable $OrderShippings
 */
class OrderShippingsController extends AppController
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
        $orderShippings = $this->paginate($this->OrderShippings);

        $this->set(compact('orderShippings'));
        $this->set('_serialize', ['orderShippings']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Shipping id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderShipping = $this->OrderShippings->get($id, [
            'contain' => ['Orders']
        ]);

        $this->set('orderShipping', $orderShipping);
        $this->set('_serialize', ['orderShipping']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderShipping = $this->OrderShippings->newEntity();
        if ($this->request->is('post')) {
            $orderShipping = $this->OrderShippings->patchEntity($orderShipping, $this->request->data);
            if ($this->OrderShippings->save($orderShipping)) {
                $this->Flash->success(__('The order shipping has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order shipping could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrderShippings->Orders->find('list', ['limit' => 200]);
        $this->set(compact('orderShipping', 'orders'));
        $this->set('_serialize', ['orderShipping']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Shipping id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderShipping = $this->OrderShippings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderShipping = $this->OrderShippings->patchEntity($orderShipping, $this->request->data);
            if ($this->OrderShippings->save($orderShipping)) {
                $this->Flash->success(__('The order shipping has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order shipping could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrderShippings->Orders->find('list', ['limit' => 200]);
        $this->set(compact('orderShipping', 'orders'));
        $this->set('_serialize', ['orderShipping']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Shipping id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderShipping = $this->OrderShippings->get($id);
        if ($this->OrderShippings->delete($orderShipping)) {
            $this->Flash->success(__('The order shipping has been deleted.'));
        } else {
            $this->Flash->error(__('The order shipping could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
