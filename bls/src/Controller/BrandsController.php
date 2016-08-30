<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Brands Controller
 *
 * @property \App\Model\Table\BrandsTable $Brands
 */
class BrandsController extends AppController
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
        $brands = $this->paginate($this->Brands);

        $this->set(compact('brands'));
        $this->set('_serialize', ['brands']);
    }

    /**
     * View method
     *
     * @param string|null $id Brand id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {	
		$categories = TableRegistry::get('Categories');
        $brand = $this->Brands->get($id, [
            'contain' => []
        ]);
		$cates = json_decode($brand->categories_ids);
		$cateies = $categories->find('all')
		->select(['id, name'])
		->where(['id IN' => $cates]);
		
	
		$this->set('cat_name', $cateies);
        $this->set('brand', $brand);
        $this->set('_serialize', ['brand']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {	
		$categories = TableRegistry::get('Categories');
		$list = $categories->find('treeList');
		
        $brand = $this->Brands->newEntity();
        if ($this->request->is('post')) {
			$cates = $this->request->data['cates'];
			$this->request->data['categories_ids'] = json_encode($cates); 
            $brand = $this->Brands->patchEntity($brand, $this->request->data);
			
            if ($this->Brands->save($brand)) {
                $this->Flash->success(__('The brand has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The brand could not be saved. Please, try again.'));
            }
        }
		$this->set('list', $list);
        $this->set(compact('brand'));
        $this->set('_serialize', ['brand']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Brand id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
	{	
		$categories = TableRegistry::get('Categories');
		$list = $categories->find('treeList');
		
        $brand = $this->Brands->get($id, [
            'contain' => []
        ]);
		
		$selected = json_decode($brand->categories_ids);
        if ($this->request->is(['patch', 'post', 'put'])) {
			
			$cates = $this->request->data['cates'];
			$this->request->data['categories_ids'] = json_encode($cates); 
            $brand = $this->Brands->patchEntity($brand, $this->request->data);
            if ($this->Brands->save($brand)) {
                $this->Flash->success(__('The brand has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The brand could not be saved. Please, try again.'));
            }
        }
		$this->set('list', $list);
		$this->set('selected', $selected);		
        $this->set(compact('brand'));
        $this->set('_serialize', ['brand']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Brand id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $brand = $this->Brands->get($id);
        if ($this->Brands->delete($brand)) {
            $this->Flash->success(__('The brand has been deleted.'));
        } else {
            $this->Flash->error(__('The brand could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
