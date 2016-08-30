<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductsPrices Controller
 *
 * @property \App\Model\Table\ProductsPricesTable $ProductsPrices
 */
class ProductsPricesController extends AppController
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
        $productsPrices = $this->paginate($this->ProductsPrices);

        $this->set(compact('productsPrices'));
        $this->set('_serialize', ['productsPrices']);
    }

    /**
     * View method
     *
     * @param string|null $id Products Price id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productsPrice = $this->ProductsPrices->get($id, [
            'contain' => ['Products']
        ]);

        $this->set('productsPrice', $productsPrice);
        $this->set('_serialize', ['productsPrice']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productsPrice = $this->ProductsPrices->newEntity();
        if ($this->request->is('post')) {
            $productsPrice = $this->ProductsPrices->patchEntity($productsPrice, $this->request->data);
            if ($this->ProductsPrices->save($productsPrice)) {
                $this->Flash->success(__('The products price has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products price could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsPrices->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsPrice', 'products'));
        $this->set('_serialize', ['productsPrice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Products Price id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productsPrice = $this->ProductsPrices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productsPrice = $this->ProductsPrices->patchEntity($productsPrice, $this->request->data);
            if ($this->ProductsPrices->save($productsPrice)) {
                $this->Flash->success(__('The products price has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The products price could not be saved. Please, try again.'));
            }
        }
        $products = $this->ProductsPrices->Products->find('list', ['limit' => 200]);
        $this->set(compact('productsPrice', 'products'));
        $this->set('_serialize', ['productsPrice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Products Price id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productsPrice = $this->ProductsPrices->get($id);
        if ($this->ProductsPrices->delete($productsPrice)) {
            $this->Flash->success(__('The products price has been deleted.'));
        } else {
            $this->Flash->error(__('The products price could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
