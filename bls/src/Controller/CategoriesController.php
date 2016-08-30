<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 */
class CategoriesController extends AppController
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
            'contain' => ['ParentCategories', 'CategoryDetails']
        ];
        $categories = $this->paginate($this->Categories);

        $this->set(compact('categories'));
        $this->set('_serialize', ['categories']);
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
  /*   public function view($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['ParentCategories', 'ChildCategories', 'ProductsCategories', 'CategoryDetails']
        ]);

        $this->set('category', $category);
        $this->set('_serialize', ['category']);
    } */

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {	
		
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
					$category = $this->Categories->patchEntity($category,$this->request->data,[
							'associated' => [
								'CategoryDetails.image',
								'CategoryDetails.image_dir'
								]
							
					]);
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category could not be saved. Please, try again.'));
            }
        }
        $parentCategories = $this->Categories->ParentCategories->find('list', ['limit' => 200]);
        $this->set(compact('category', 'parentCategories'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $category = $this->Categories->get($id, [
            'contain' => ['CategoryDetails']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $category = $this->Categories->patchEntity($category, $this->request->data,[
							'associated' => [
								'CategoryDetails.image',
								'CategoryDetails.image_dir'
								]
							
					]);
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('The category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The category could not be saved. Please, try again.'));
            }
        }
        $parentCategories = $this->Categories->ParentCategories->find('list', ['limit' => 200]);
        $this->set(compact('category', 'parentCategories'));
        $this->set('_serialize', ['category']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if ($this->Categories->delete($category)) {
            $this->Flash->success(__('The category has been deleted.'));
        } else {
            $this->Flash->error(__('The category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
	public function menu(){
		
				//$parentCategory = $this->Categories->ParentCategory->find('list', ['limit' => 200])->find('threaded');
		
				/* if ($this->request->is(['patch', 'post', 'put'])) {
					
					echo json_encode($this->request->data['categories']);
					die;
				} */
				$list = $this->Categories->find('treeList')
				->toArray();
				$this->set('list', $list);	
	}

}
