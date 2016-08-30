<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Mailer\Email;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class LoginsController extends AppController
{

	public function initialize()
		{
			parent::initialize();
			
			// Set the layout
			$this->viewBuilder()->layout('Login');	
			//$this->Auth->allow();  
		}
		
		
 /* 	public function beforeFilter(Event $event)
    {
		parent::beforeFilter($event);
		$this->Auth->allow('logout', 'forget','reset','after_forget');
		
    }	  */

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
	public function index() {
		
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
				if ($user) {
					$this->Auth->setUser($user);
					$this->Flash->success(__('Logged In Successfully!'));
					return $this->redirect($this->Auth->redirectUrl());
				}
					$this->Flash->error(__('Invalid username or password, try again'));
		}
	}
	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
	
	
	/**
     * Allow a user to request a password reset.
     * @return
     */
     function forget() {
		$admin = TableRegistry::get('Admins');
	
	if($this->request->data){
     $admin_email =  $this->request->data['email'];
	
	  if (!empty($admin_email)) {
			$users = $admin->find('all', ['conditions'=>['Admins.email'=>$admin_email]]);
			$user = $users->first();
			
			//echo $user->email;die;
			
			if(!$user){
				$this->Flash->success('Sorry, the username entered was not found.');
               // $this->redirect('forget');
				
			}else{
				//Time::$defaultLocale = 'es-ES';
               
				$time = Time::now('Asia/Kolkata');
				$time_new = $time->i18nFormat('yyyy-MM-dd HH:mm:ss');
					$token = $user->id."+".$user->email."+".$time_new;
					$token_new = base64_encode($token);
					$subject='About';
				$send = "<a href=".$this->base."/logins/reset?q=".$token_new. ">click it </a>";
				$sendto = $user->email;
				$from = 'himani.arora@sdnainfotech.com';
				$mailsent=$this->send_email($sendto,$from,$send,$subject);
					
					
						 
				
					if($mailsent){
					return $this->redirect([
    'controller' => 'logins',
    'action' => 'AfterForget'
]);
				}
				
			}
			
			
            }
	
}
        } 
		
	
		/**
     * Allow a user to password reset.
     * @return
     */
    function reset() {
		 $this -> loadComponent('HashPassword');
		$admin = TableRegistry::get('Admins');
        $url =  $_REQUEST['q'];
		$url_res = base64_decode($url);
		
		$res= explode("+",$url_res);
		
			if (!empty($this->request->data)) {
				$password =  $this->request->data['password'];
				$confirm_pass =  $this->request->data['password1'];
				if($password == $confirm_pass ){
					/* $time_res = $res[2];
				 $time_new = new Time($time_res);
					$time_c = $time_new->i18nFormat('yyyy-MM-dd HH:mm:ss'); 
					$tz = new DateTimeZone('Asia/Kolkata');
					$date = new DateTime($today, $tz);
					$date->modify('+10 hours');
					echo $date; die;
					$timestamp = $time_c->modify('+24 hours');
					echo $timestamp; die; */
					
					//query for updating the password in database		
					$query = $admin->query();
					$query->update()
					->set(['password' =>$this -> HashPassword->_setPassword($password)])
					->where(['id' => $res[0]])
					->execute();  
		
					if($query){
						$this->Flash->success('Your password has been updated, Please login.');
						return $this->redirect([
					'controller' => 'logins',
					'action' => 'index'
					]);
							}
				}
				else{
					$this->Flash->success('Sorry, the password does not match with confirm password.');
				
			}
		
			}
		else{
			$this->Flash->success('Plese enter your inputs.');
		}
			}
		
		 function AfterForget() {
			 $this->Flash->success('We have send you an email to reset your password,Please check your email');
		
        }
		
	function send_email($sendto="",$from="",$send="",$subject="") {
		
		 $email = new Email('mailjet');
				$email->from([$from])
				->to($sendto)
				->subject($subject)
				->send($send);	
		
			
			
			
		   if($email){
			   return  "1";
		   }
		   else {
			   return  "0";
		   }
		exit;
}	
		
		
  
}
