<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrderStatuses Controller
 *
 * @property \App\Model\Table\OrderStatusesTable $OrderStatuses
 */
class OrderStatusesController extends AppController
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
        $orderStatuses = $this->paginate($this->OrderStatuses);

        $this->set(compact('orderStatuses'));
        $this->set('_serialize', ['orderStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderStatus = $this->OrderStatuses->get($id, [
            'contain' => ['OrderUpdateStatuses']
        ]);

        $this->set('orderStatus', $orderStatus);
        $this->set('_serialize', ['orderStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderStatus = $this->OrderStatuses->newEntity();
        if ($this->request->is('post')) {
            $orderStatus = $this->OrderStatuses->patchEntity($orderStatus, $this->request->data);
            if ($this->OrderStatuses->save($orderStatus)) {
                $this->Flash->success(__('The order status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('orderStatus'));
        $this->set('_serialize', ['orderStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Status id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderStatus = $this->OrderStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderStatus = $this->OrderStatuses->patchEntity($orderStatus, $this->request->data);
            if ($this->OrderStatuses->save($orderStatus)) {
                $this->Flash->success(__('The order status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order status could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('orderStatus'));
        $this->set('_serialize', ['orderStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderStatus = $this->OrderStatuses->get($id);
        if ($this->OrderStatuses->delete($orderStatus)) {
            $this->Flash->success(__('The order status has been deleted.'));
        } else {
            $this->Flash->error(__('The order status could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
