<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Colors Controller
 *
 * @property \App\Model\Table\ColorsTable $Colors
 */
class ColorsController extends AppController
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
        $colors = $this->paginate($this->Colors);

        $this->set(compact('colors'));
        $this->set('_serialize', ['colors']);
    }

    /**
     * View method
     *
     * @param string|null $id Color id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   /*  public function view($id = null)
    {
        $color = $this->Colors->get($id, [
            'contain' => []
        ]);

        $this->set('color', $color);
        $this->set('_serialize', ['color']);
    } */

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {	
        $color = $this->Colors->newEntity();
        if ($this->request->is('post')) {
			
			
			
            $color = $this->Colors->patchEntity($color, $this->request->data);
            if ($this->Colors->save($color)) {
                $this->Flash->success(__('The color has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The color could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('color'));
        $this->set('_serialize', ['color']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Color id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $color = $this->Colors->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $color = $this->Colors->patchEntity($color, $this->request->data);
            if ($this->Colors->save($color)) {
                $this->Flash->success(__('The color has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The color could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('color'));
        $this->set('_serialize', ['color']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Color id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $color = $this->Colors->get($id);
        if ($this->Colors->delete($color)) {
            $this->Flash->success(__('The color has been deleted.'));
        } else {
            $this->Flash->error(__('The color could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
