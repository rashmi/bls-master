<?php
namespace App\Controller\API;
use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
{
	
	public $helpers = ['Form', 'Html'];
	public function initialize()
		{
			 parent::initialize();
		     $this->loadComponent('RequestHandler');
		}

	public function beforeFilter(Event $event)
		{     

			$this->Auth->allow(['getUserOrders']);
		}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
		public function getUserOrders()
		{   
			header('Content-Type: application/json');
			header('Access-Control-Allow-Origin: *');  
			$connection = ConnectionManager::get('default');
			//CHECK LOGIN USER
			$session = $this->request->session();
			$current_user = $this->request->session()->read('Current_User');

			if(is_null($current_user)){

				$response['msg']='Unauthorized access. Please login to get details.';
				$response['response_code']='0';			
				$this->set(array(
				'response' => $response,
				'_serialize' => array('response')
				));

			}else{
				//GET ORDER HISTORY
				$login_user_id = $current_user[0]['id'];
				$sql = "
					SELECT 
						Orders.id as Order_id,
						Orders.user_id as Order_User_ID,
						Orders.user_addresses_id as Order_address_id,
						Orders.user_comments as Order_User_Comments,
						Orders.admin_comments as Order_Admin_Comments,
						Orders.transactionCode as Order_Transaction_Code,
						Orders.refrenceCode as Order_Reference_Code,
						Orders.otherCode as Order_Other_Code,
						Orders.transactionCode as Order_Transaction_Code,			
						Orders.created as Order_CREATED,
						Product.id as PRODUCT_ID,
						Product.item_code as PRODUCT_ITEMCODE,
						Product.title as PRODUCT_TITLE,
						Product.product_desc as PRODUCT_DESC,
						Product.created as PRODUCT_CREATED,
						ProductsAttr.brand_id as PRODUCT_BRANDID,
						ProductsAttr.model as PRODUCT_MODEL,
						ProductsAttr.video_link as PRODUCT_VIDEOLINK,
						ProductsAttr.size as PRODUCT_SIZE,
						ProductsAttr.weight as PRODUCT_WEIGHT,
						ProductsAttr.packaging as PRODUCT_PACKAGING,
						ProductsAttr.uom as PRODUCT_UOM,
						ProductsAttr.quantity as PRODUCT_QUANTITY,
						ProductsAttr.main_promo_1 as PRODUCT_PROMO1,
						ProductsAttr.main_promo_2 as PRODUCT_PROMO2,
						ProductsAttr.main_promo_3 as PRODUCT_PROMO3,
						ProductsImages.*,
						ProductsMarketingImages.*,
						ProductsPrices.*,
						ProductsRelated.*

					FROM orders as Orders

						LEFT JOIN orders_products as OrderProduct ON (OrderProduct.order_id=Orders.id)
						LEFT JOIN orders_shippings as OrderShipping ON (OrderShipping.order_id=Orders.id)
						LEFT JOIN order_update_statuses as OrderUpdateStatus ON (OrderUpdateStatus.order_id=Orders.id)

						LEFT JOIN products as Product ON (Product.id=OrderProduct.product_id)
						LEFT JOIN products_attrs as ProductsAttr ON (ProductsAttr.product_id=Product.id)
						LEFT JOIN products_images as ProductsImages ON (ProductsImages.product_id=Product.id)
						LEFT JOIN products_marketing_images as ProductsMarketingImages ON (ProductsMarketingImages.product_id=Product.id)
						LEFT JOIN products_prices as ProductsPrices ON (ProductsPrices.product_id=Product.id)
						LEFT JOIN products_relateds as ProductsRelated ON (ProductsRelated.product_id=Product.id)

					WHERE

						Orders.user_id=".$login_user_id." GROUP BY OrderProduct.product_id
				";

				$orders = $connection->execute($sql)->fetchAll('assoc');

				//pre($orders);

				
				$this->set(array(
				'orders' => $orders,
				'_serialize' => array('orders')
				));

				//----------------------
				
			} 
		}

   
}
