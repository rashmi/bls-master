<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsAttrs Controller
 *
 * @property \App\Model\Table\ProductsAttrsTable $ProductsAttrs
 */
class ProductsAttrsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Brands']
        ];
        $productsAttrs = $this->paginate($this->ProductsAttrs);

        $this->set(compact('productsAttrs'));
        $this->set('_serialize', ['productsAttrs']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Attr id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsAttr = $this->ProductsAttrs->get($id, [
            'contain' => ['Products', 'Brands']
        ]);

        $this->set('productsAttr', $productsAttr);
        $this->set('_serialize', ['productsAttr']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsAttr = $this->ProductsAttrs->newEntity();
        if ($this->request->is('post')) {
            $productsAttr = $this->ProductsAttrs->patchEntity($productsAttr, $this->request->data);
            if ($this->ProductsAttrs->save($productsAttr)) {
                $this->Flash->success(__('The products attr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products attr could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsAttrs->Products->find('list', ['limit' => 200]);
        $brands = $this->ProductsAttrs->Brands->find('list', ['limit' => 200]);
        $this->set(compact('productsAttr', 'products', 'brands'));
        $this->set('_serialize', ['productsAttr']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Attr id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsAttr = $this->ProductsAttrs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsAttr = $this->ProductsAttrs->patchEntity($productsAttr, $this->request->data);
            if ($this->ProductsAttrs->save($productsAttr)) {
                $this->Flash->success(__('The products attr has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products attr could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsAttrs->Products->find('list', ['limit' => 200]);
        $brands = $this->ProductsAttrs->Brands->find('list', ['limit' => 200]);
        $this->set(compact('productsAttr', 'products', 'brands'));
        $this->set('_serialize', ['productsAttr']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Attr id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsAttr = $this->ProductsAttrs->get($id);
        if ($this->ProductsAttrs->delete($productsAttr)) {
            $this->Flash->success(__('The products attr has been deleted.'));
        } else {
            $this->Flash->error(__('The products attr could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
