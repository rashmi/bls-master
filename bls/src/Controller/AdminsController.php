<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 */
class AdminsController extends AppController
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
            'contain' => ['Groups'],
			'conditions'=>['Admins.id NOT IN'=>$this->Auth->user('id')]
        ];
        $admins = $this->paginate($this->Admins);
        $this->set(compact('admins'));
        $this->set('_serialize', ['admins']);
    }
	
    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('admin', $admin);
        $this->set('_serialize', ['admin']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admins->newEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admins->patchEntity($admin, $this->request->data);
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin could not be saved. Please, try again.'));
            }
        }
		$groups = $this->Admins->Groups->find('list', ['limit' => 200]);
        $this->set(compact('admin', 'groups'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admins->patchEntity($admin, $this->request->data);
            if ($this->Admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin could not be saved. Please, try again.'));
            }
        }
		$groups = $this->Admins->Groups->find('list', ['limit' => 200]);
        $this->set(compact('admin', 'groups'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
       // $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
