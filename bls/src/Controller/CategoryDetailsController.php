<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoryDetails Controller
 *
 * @property \App\Model\Table\CategoryDetailsTable $CategoryDetails
 */
class CategoryDetailsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $categoryDetails = $this->paginate($this->CategoryDetails);

        $this->set(compact('categoryDetails'));
        $this->set('_serialize', ['categoryDetails']);
    }

    /**
     * View method
     *
     * @param string|null $id Category Detail id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoryDetail = $this->CategoryDetails->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('categoryDetail', $categoryDetail);
        $this->set('_serialize', ['categoryDetail']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoryDetail = $this->CategoryDetails->newEntity();
        if ($this->request->is('post')) {
            $categoryDetail = $this->CategoryDetails->patchEntity($categoryDetail, $this->request->data);
            if ($this->CategoryDetails->save($categoryDetail)) {
                $this->Flash->success(__('The category detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category detail could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoryDetails->Categories->find('list', ['limit' => 200]);
        $this->set(compact('categoryDetail', 'categories'));
        $this->set('_serialize', ['categoryDetail']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category Detail id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoryDetail = $this->CategoryDetails->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoryDetail = $this->CategoryDetails->patchEntity($categoryDetail, $this->request->data);
            if ($this->CategoryDetails->save($categoryDetail)) {
                $this->Flash->success(__('The category detail has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category detail could not be saved. Please, try again.'));
            }
        }
        $categories = $this->CategoryDetails->Categories->find('list', ['limit' => 200]);
        $this->set(compact('categoryDetail', 'categories'));
        $this->set('_serialize', ['categoryDetail']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category Detail id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoryDetail = $this->CategoryDetails->get($id);
        if ($this->CategoryDetails->delete($categoryDetail)) {
            $this->Flash->success(__('The category detail has been deleted.'));
        } else {
            $this->Flash->error(__('The category detail could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
