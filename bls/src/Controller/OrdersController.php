<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
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
   if ($this->request->is(['patch', 'post', 'put'])) {	
	$status = $this->request->data['status'];
	echo $this->redirect(['action' => 'view',$id]);
	//debug($status);die;
   }
        $this->paginate = [
            'contain' => ['Users', 'UserAddresses', 'Users.UserDetails', 'OrdersProducts','OrderUpdateStatuses','OrderUpdateStatuses.OrderStatuses']
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
        $this->set('_serialize', ['orders']);
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
		$order_status = TableRegistry::get('OrderStatuses');
		
		
		$user = $this->Auth->user('id');
		//debug($user);die;
        $order = $this->Orders->get($id, [
            'contain' => ['Users', 'UserAddresses','Users.UserDetails', 'Products', 'OrderUpdateStatuses', 'OrdersShippings','OrderUpdateStatuses.OrderStatuses','OrderUpdateStatuses.Admins']
        ]);
		
		 if ($this->request->is(['patch', 'post', 'put'])) {
			 $order_update_status = TableRegistry::get('OrderUpdateStatuses');
			  $order_entity = $order_update_status->newEntity();
		
			  $this->request->data['order_id']=$id;
			   $this->request->data['admin_id'] = $user;
			   $status =  $this->request->data;
			
            $orderUpdateStatus = $order_update_status->patchEntity($order_entity, $status);
		
            if ($order_update_status->save($orderUpdateStatus)) {
                $this->Flash->success(__('The order update status has been saved.'));
                return $this->redirect(['action' => 'view',$id]);
            } else {
                $this->Flash->error(__('The order update status could not be saved. Please, try again.'));
            }
        }
          $orderStatuses = $order_status->find('list', ['limit' => 200]);
		  //debug($orderStatuses);
		  $this->set('orderStatuses', $orderStatuses);
        $this->set('order', $order);
        $this->set('_serialize', ['order']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $userAddresses = $this->Orders->UserAddresses->find('list', ['limit' => 200]);
        $products = $this->Orders->Products->find('list', ['limit' => 200]);
        $this->set(compact('order', 'users', 'userAddresses', 'products'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Products']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $userAddresses = $this->Orders->UserAddresses->find('list', ['limit' => 200]);
        $products = $this->Orders->Products->find('list', ['limit' => 200]);
        $this->set(compact('order', 'users', 'userAddresses', 'products'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
