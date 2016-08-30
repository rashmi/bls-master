<?php
namespace App\Controller\API;
use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class PromotionsController extends AppController
{
	public function beforeFilter(Event $event)
    {      

		$this->Auth->allow(['getAllValuePlus']);
    }

	public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
		
    }

	
    /**
     * method
     *
     * @return \Cake\Network\Response|null
     */
    public function getAllValuePlus()
    {
		header('Content-Type: application/json');
		header('Access-Control-Allow-Origin: *');
		
		$connection = ConnectionManager::get('default');		
		$sqlSearch = "SELECT product_id FROM products_attrs WHERE main_promo_1='value plus'";
		$products['products'] = $connection->execute($sqlSearch)->fetchAll('assoc');

		foreach($products['products'] as $key=>$product){
			//--------------------------------------------------			
				$product_ids[$key]=$product['product_id']; 
			//--------------------------------------------------
		}

		$sqlPart = implode(',',$product_ids);

		

		
		$sqlQry = "SELECT DISTINCT category_id FROM `products_categories` WHERE product_id IN (".$sqlPart.")";

		$arrCatId = $connection->execute($sqlQry)->fetchAll('assoc');


		//print_r($arrCatId);die('xssssss');

		//===========================================================================================

		

		$sql = "SELECT *,categories.id as cat_id  FROM `categories`
		LEFT JOIN category_details ON categories.id = category_details.category_id
		WHERE `parent_id` = 24";

		$results = $connection->execute($sql)->fetchAll('assoc');


		$arrParId = array('18','19');

		$i=0;
		foreach($arrParId as $key=>$pid){

			$catId = $pid;

			echo $sql2 = "
			SELECT *,(SELECT name FROM `categories` WHERE id=".$catId.") as PARENT_CATEGORY,
			categories.id as CHILD_CATEGORY_ID 
			FROM `categories` 
			LEFT JOIN category_details ON categories.id = category_details.category_id 
			LEFT JOIN products_categories ON categories.id = products_categories.category_id
			WHERE `parent_id` =".$catId."";

			$results2 = $connection->execute($sql2)->fetchAll('assoc');
			//$arrSubCat = json_decode(json_encode($results2));
			//$results[$key]['sub_cat'] = $arrSubCat;
			pre($results);
			$i=$i+1;
		
		}
		
		
		die('xxx');
		
		/*	

		$i=0;
		foreach($results as $key=>$records){
			$results[$key]['image_url_path'] = $this->imagePath.$records['image'];
			$catId = $records['cat_id'];			
			$sql2 = "
			SELECT *,(SELECT name FROM `categories` WHERE id=".$catId.") as PARENT_CATEGORY,
			categories.id as CHILD_CATEGORY_ID 
			FROM `categories` 
			LEFT JOIN category_details ON categories.id = category_details.category_id 
			LEFT JOIN products_categories ON categories.id = products_categories.category_id
			WHERE `parent_id` =".$catId."";

			echo ($sql2);
			echo "
			
			
			";

			$results2 = $connection->execute($sql2)->fetchAll('assoc');
			$arrSubCat = json_decode(json_encode($results2));
			$results[$key]['sub_cat'] = $arrSubCat;			
			
			$i=$i+1;
		}	
		*/
		
		echo json_encode($results);
		
	
		die('xxxx');
		
    }

	
    
}
