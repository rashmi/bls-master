<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserAddresses Controller
 *
 * @property \App\Model\Table\UserAddressesTable $UserAddresses
 */
class UserAddressesController extends AppController
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
            'contain' => ['Users']
        ];
        $userAddresses = $this->paginate($this->UserAddresses);

        $this->set(compact('userAddresses'));
        $this->set('_serialize', ['userAddresses']);
    }

    /**
     * View method
     *
     * @param string|null $id User Address id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userAddress = $this->UserAddresses->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('userAddress', $userAddress);
        $this->set('_serialize', ['userAddress']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userAddress = $this->UserAddresses->newEntity();
        if ($this->request->is('post')) {
            $userAddress = $this->UserAddresses->patchEntity($userAddress, $this->request->data);
            if ($this->UserAddresses->save($userAddress)) {
                $this->Flash->success(__('The user address has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user address could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserAddresses->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAddress', 'users'));
        $this->set('_serialize', ['userAddress']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Address id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userAddress = $this->UserAddresses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userAddress = $this->UserAddresses->patchEntity($userAddress, $this->request->data);
            if ($this->UserAddresses->save($userAddress)) {
                $this->Flash->success(__('The user address has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user address could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserAddresses->Users->find('list', ['limit' => 200]);
        $this->set(compact('userAddress', 'users'));
        $this->set('_serialize', ['userAddress']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Address id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userAddress = $this->UserAddresses->get($id);
        if ($this->UserAddresses->delete($userAddress)) {
            $this->Flash->success(__('The user address has been deleted.'));
        } else {
            $this->Flash->error(__('The user address could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
