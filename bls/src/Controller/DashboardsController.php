<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class DashboardsController extends AppController
{
	public function initialize()
		{
			parent::initialize();
			
			// Set the layout
			$this->viewBuilder()->layout('Admin'); 
		}
    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
	public function index() {
		
	}



}
