<?php
namespace App\Controller\API;
use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * Countries Controller
 *
 * @property \App\Model\Table\CountriesTable $Countries
 */
class CategoriesController extends AppController
{	
	public $imagePath = CAT_IMG_PATH_PRODUCTS;

	public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index','subcategories','allcategories','getAllSubCategories']);
	
    }
	
	public function index(){

		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');  

		$connection = ConnectionManager::get('default');

		$sql = "SELECT *  FROM `categories`
		LEFT JOIN category_details ON categories.id = category_details.category_id
		WHERE `parent_id` = 24";

		$results = $connection->execute($sql)->fetchAll('assoc');
		$i=0;
		foreach($results as $key=>$records){
			$results[$key]['image_url_path'] = $this->imagePath.$records['image'];
			$i=$i+1;
		}		
		echo json_encode($results);
		die;
	}

	public function allcategories(){

		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');
		$connection = ConnectionManager::get('default');
		$sql = "SELECT *  FROM `categories`
		LEFT JOIN category_details ON categories.id = category_details.category_id
		WHERE `parent_id` = 24";

		$results = $connection->execute($sql)->fetchAll('assoc');
		$i=0;
		foreach($results as $key=>$records){
			$results[$key]['image_url_path'] = $this->imagePath.$records['image'];
			$i=$i+1;
		}		
		echo json_encode($results);
		die;
	}

	public function getAllSubCategories(){

		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');  

		$connection = ConnectionManager::get('default');

		$sql = "SELECT *,categories.id as cat_id  FROM `categories`
		LEFT JOIN category_details ON categories.id = category_details.category_id
		WHERE `parent_id` = 24";

		$results = $connection->execute($sql)->fetchAll('assoc');

		$i=0;
		foreach($results as $key=>$records){
			$results[$key]['image_url_path'] = $this->imagePath.$records['image'];
			$catId = $records['cat_id'];			
			$sql2 = "SELECT *,(SELECT name FROM `categories` WHERE id=".$catId.") as PARENT_CATEGORY,categories.id as CHILD_CATEGORY_ID FROM `categories` LEFT JOIN category_details ON categories.id = category_details.category_id WHERE `parent_id` =".$catId;
			$results2 = $connection->execute($sql2)->fetchAll('assoc');
			$arrSubCat = json_decode(json_encode($results2));
			$results[$key]['sub_cat'] = $arrSubCat;			
			
			$i=$i+1;
		}		
		//pre($results);die('xxx');
		echo json_encode($results);
		
		die;
	}

	

	public function subcategories($catId){
		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');
		$connection = ConnectionManager::get('default');

		$sql = "SELECT *,(SELECT name FROM `categories` WHERE id=".$catId.") as PARENT_CATEGORY FROM `categories` LEFT JOIN category_details ON categories.id = category_details.category_id WHERE `parent_id` =".$catId;
		$results = $connection->execute($sql)->fetchAll('assoc');
		echo json_encode($results);
		die;
		
	}
}
?>
