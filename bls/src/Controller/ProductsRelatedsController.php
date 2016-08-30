<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsRelateds Controller
 *
 * @property \App\Model\Table\ProductsRelatedsTable $ProductsRelateds
 */
class ProductsRelatedsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products']
        ];
        $productsRelateds = $this->paginate($this->ProductsRelateds);

        $this->set(compact('productsRelateds'));
        $this->set('_serialize', ['productsRelateds']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Related id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsRelated = $this->ProductsRelateds->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productsRelated', $productsRelated);
        $this->set('_serialize', ['productsRelated']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsRelated = $this->ProductsRelateds->newEntity();
        if ($this->request->is('post')) {
            $productsRelated = $this->ProductsRelateds->patchEntity($productsRelated, $this->request->data);
            if ($this->ProductsRelateds->save($productsRelated)) {
                $this->Flash->success(__('The products related has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products related could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsRelateds->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsRelated', 'products'));
        $this->set('_serialize', ['productsRelated']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Related id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsRelated = $this->ProductsRelateds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsRelated = $this->ProductsRelateds->patchEntity($productsRelated, $this->request->data);
            if ($this->ProductsRelateds->save($productsRelated)) {
                $this->Flash->success(__('The products related has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products related could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsRelateds->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsRelated', 'products'));
        $this->set('_serialize', ['productsRelated']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Related id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsRelated = $this->ProductsRelateds->get($id);
        if ($this->ProductsRelateds->delete($productsRelated)) {
            $this->Flash->success(__('The products related has been deleted.'));
        } else {
            $this->Flash->error(__('The products related could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
