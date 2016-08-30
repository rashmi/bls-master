<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Auth\DefaultPasswordHasher;
/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 */
class MyProfileController extends AppController
{

	public $helpers = ['Form', 'Html'];
	public function initialize()
		{
			parent::initialize();
			
			// Set the layout
			$this->viewBuilder()->layout('admin');
			//$this->Auth->allow();  
		}
	
	
	

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {	
	
		$id = $this->Auth->user('id');
		$admins = TableRegistry::get('Admins');
        $admin = $admins->get($id, [
            'contain' => ['Groups']
        ]);

        $this->set('admin', $admin);
        $this->set('_serialize', ['admin']);
    }
	
    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit()
    {	$admins = TableRegistry::get('Admins');
		$id = $this->Auth->user('id');
        $admin = $admins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $admins->patchEntity($admin, $this->request->data);
            if ($admins->save($admin)) {
                $this->Flash->success(__('The admin has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The admin could not be saved. Please, try again.'));
            }
        }
		$groups = $admins->Groups->find('list', ['limit' => 200]);
        $this->set(compact('admin', 'groups'));
        $this->set('_serialize', ['admin']);
    }
	
	 public function changepass()
    {	
		$admins = TableRegistry::get('Admins');
		$id = $this->Auth->user('id');
        $admin = $admins->get($id, [
            'contain' => []
        ]);
		
        if ($this->request->is(['patch', 'post', 'put'])) {
			
			$current_pass = $this->request->data['current_pass'];
			$new_pass = $this->request->data['new_pass'];
			$confirm_pass = $this->request->data['confirm_pass'];
			
			
			
			if($new_pass==$confirm_pass){
				$verify = (new DefaultPasswordHasher)
				->check($this->request->data['current_pass'], $admin->password);
				
				if($verify)	{	
						$this->request->data['password'] = $this->request->data['new_pass'];						
						$admin = $admins->patchEntity($admin, $this->request->data);
						if ($admins->save($admin)) {
							$this->Flash->success(__('The admin has been saved.'));
							return $this->redirect(['action' => 'index']);
						} else {
							$this->Flash->error(__('The admin could not be saved. Please, try again.'));
						}
					
				}else{
					$this->Flash->success(__('Current password doesn`t match.'));
					return $this->redirect(['action' => 'changepass']);
				}
			}else{
				
				  $this->Flash->success(__('New Password and Confirm password doesn`t match.'));
                return $this->redirect(['action' => 'changepass']);
			}
				
 
        }
		$groups = $admins->Groups->find('list', ['limit' => 200]);
        $this->set(compact('admin', 'groups'));
        $this->set('_serialize', ['admin']);
    }
	

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
   /*  public function delete($id = null)
    {
       // $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success(__('The admin has been deleted.'));
        } else {
            $this->Flash->error(__('The admin could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    } */
}
