<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrderUpdateStatuses Controller
 *
 * @property \App\Model\Table\OrderUpdateStatusesTable $OrderUpdateStatuses
 */
class OrderUpdateStatusesController extends AppController
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
            'contain' => ['Orders', 'OrderStatuses', 'Admins']
        ];
        $orderUpdateStatuses = $this->paginate($this->OrderUpdateStatuses);

        $this->set(compact('orderUpdateStatuses'));
        $this->set('_serialize', ['orderUpdateStatuses']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Update Status id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderUpdateStatus = $this->OrderUpdateStatuses->get($id, [
            'contain' => ['Orders', 'OrderStatuses', 'Admins']
        ]);

        $this->set('orderUpdateStatus', $orderUpdateStatus);
        $this->set('_serialize', ['orderUpdateStatus']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderUpdateStatus = $this->OrderUpdateStatuses->newEntity();
        if ($this->request->is('post')) {
            $orderUpdateStatus = $this->OrderUpdateStatuses->patchEntity($orderUpdateStatus, $this->request->data);
            if ($this->OrderUpdateStatuses->save($orderUpdateStatus)) {
                $this->Flash->success(__('The order update status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order update status could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrderUpdateStatuses->Orders->find('list', ['limit' => 200]);
        $orderStatuses = $this->OrderUpdateStatuses->OrderStatuses->find('list', ['limit' => 200]);
        $admins = $this->OrderUpdateStatuses->Admins->find('list', ['limit' => 200]);
        $this->set(compact('orderUpdateStatus', 'orders', 'orderStatuses', 'admins'));
        $this->set('_serialize', ['orderUpdateStatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Update Status id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderUpdateStatus = $this->OrderUpdateStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderUpdateStatus = $this->OrderUpdateStatuses->patchEntity($orderUpdateStatus, $this->request->data);
            if ($this->OrderUpdateStatuses->save($orderUpdateStatus)) {
                $this->Flash->success(__('The order update status has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order update status could not be saved. Please, try again.'));
            }
        }
        $orders = $this->OrderUpdateStatuses->Orders->find('list', ['limit' => 200]);
        $orderStatuses = $this->OrderUpdateStatuses->OrderStatuses->find('list', ['limit' => 200]);
        $admins = $this->OrderUpdateStatuses->Admins->find('list', ['limit' => 200]);
        $this->set(compact('orderUpdateStatus', 'orders', 'orderStatuses', 'admins'));
        $this->set('_serialize', ['orderUpdateStatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Update Status id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderUpdateStatus = $this->OrderUpdateStatuses->get($id);
        if ($this->OrderUpdateStatuses->delete($orderUpdateStatus)) {
            $this->Flash->success(__('The order update status has been deleted.'));
        } else {
            $this->Flash->error(__('The order update status could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
