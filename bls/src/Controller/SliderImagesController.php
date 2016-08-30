<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SliderImages Controller
 *
 * @property \App\Model\Table\SliderImagesTable $SliderImages
 */
class SliderImagesController extends AppController
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
        $sliderImages = $this->paginate($this->SliderImages);

        $this->set(compact('sliderImages'));
        $this->set('_serialize', ['sliderImages']);
    }

    /**
     * View method
     *
     * @param string|null $id Slider Image id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sliderImage = $this->SliderImages->get($id, [
            'contain' => []
        ]);

        $this->set('sliderImage', $sliderImage);
        $this->set('_serialize', ['sliderImage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sliderImage = $this->SliderImages->newEntity();
        if ($this->request->is('post')) {
            $sliderImage = $this->SliderImages->patchEntity($sliderImage, $this->request->data);
            if ($this->SliderImages->save($sliderImage)) {
                $this->Flash->success(__('The slider image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The slider image could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sliderImage'));
        $this->set('_serialize', ['sliderImage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Slider Image id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sliderImage = $this->SliderImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sliderImage = $this->SliderImages->patchEntity($sliderImage, $this->request->data);
            if ($this->SliderImages->save($sliderImage)) {
                $this->Flash->success(__('The slider image has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The slider image could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sliderImage'));
        $this->set('_serialize', ['sliderImage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Slider Image id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sliderImage = $this->SliderImages->get($id);
        if ($this->SliderImages->delete($sliderImage)) {
            $this->Flash->success(__('The slider image has been deleted.'));
        } else {
            $this->Flash->error(__('The slider image could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
