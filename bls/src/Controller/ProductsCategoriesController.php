<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsCategories Controller
 *
 * @property \App\Model\Table\ProductsCategoriesTable $ProductsCategories
 */
class ProductsCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Products']
        ];
        $productsCategories = $this->paginate($this->ProductsCategories);

        $this->set(compact('productsCategories'));
        $this->set('_serialize', ['productsCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsCategory = $this->ProductsCategories->get($id, [
            'contain' => ['Categories', 'Products']
        ]);

        $this->set('productsCategory', $productsCategory);
        $this->set('_serialize', ['productsCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsCategory = $this->ProductsCategories->newEntity();
        if ($this->request->is('post')) {
            $productsCategory = $this->ProductsCategories->patchEntity($productsCategory, $this->request->data);
            if ($this->ProductsCategories->save($productsCategory)) {
                $this->Flash->success(__('The products category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products category could not be saved. Please, try again.'));
            }
        }
        $categories = $this->ProductsCategories->Categories->find('list', ['limit' => 200]);
        $products = $this->ProductsCategories->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsCategory', 'categories', 'products'));
        $this->set('_serialize', ['productsCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsCategory = $this->ProductsCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsCategory = $this->ProductsCategories->patchEntity($productsCategory, $this->request->data);
            if ($this->ProductsCategories->save($productsCategory)) {
                $this->Flash->success(__('The products category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products category could not be saved. Please, try again.'));
            }
        }
        $categories = $this->ProductsCategories->Categories->find('list', ['limit' => 200]);
        $products = $this->ProductsCategories->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsCategory', 'categories', 'products'));
        $this->set('_serialize', ['productsCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsCategory = $this->ProductsCategories->get($id);
        if ($this->ProductsCategories->delete($productsCategory)) {
            $this->Flash->success(__('The products category has been deleted.'));
        } else {
            $this->Flash->error(__('The products category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
