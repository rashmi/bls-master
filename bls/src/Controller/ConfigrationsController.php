<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Configrations Controller
 *
 * @property \App\Model\Table\ConfigrationsTable $Configrations
 */
class ConfigrationsController extends AppController
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
		$configrations = $this->Configrations->find();
		$configration=$configrations->first();
		$this->set('configration', $configration);
        $this->set('_serialize', ['configration']);
    }

    /**
     * View method
     *
     * @param string|null $id Configration id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   /*  public function view($id = null)
    {
        $configration = $this->Configrations->get($id, [
            'contain' => []
        ]);
		
        $this->set('configration', $configration);
        $this->set('_serialize', ['configration']);
    } */

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
/*     public function add()
    {
        $configration = $this->Configrations->newEntity();
        if ($this->request->is('post')) {
            $configration = $this->Configrations->patchEntity($configration, $this->request->data);
            if ($this->Configrations->save($configration)) {
                $this->Flash->success(__('The configration has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The configration could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('configration'));
        $this->set('_serialize', ['configration']);
    } */

    /**
     * Edit method
     *
     * @param string|null $id Configration id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit()
    {
        $configrations = $this->Configrations->find();
		$configration = $configrations->first();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $configration = $this->Configrations->patchEntity($configration, $this->request->data);
            if ($this->Configrations->save($configration)) {
                $this->Flash->success(__('The configration has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The configration could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('configration'));
        $this->set('_serialize', ['configration']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Configration id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
/*     public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $configration = $this->Configrations->get($id);
        if ($this->Configrations->delete($configration)) {
            $this->Flash->success(__('The configration has been deleted.'));
        } else {
            $this->Flash->error(__('The configration could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    } */
}
