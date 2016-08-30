<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
/**
 * Promotions Controller
 *
 * @property \App\Model\Table\PromotionsTable $Promotions
 */
class PromotionsController extends AppController
{	
	
	public $helpers = ['Form', 'Html'];
	public function initialize()
		{
			parent::initialize();
			
			// Set the layout
			$this->viewBuilder()->layout('admin');
			
		}
	
	public function getAllValueplus(){

		$ProductsAttrs = TableRegistry::get('ProductsAttrs');
		$sql = "";
		
	
	}
    


}
