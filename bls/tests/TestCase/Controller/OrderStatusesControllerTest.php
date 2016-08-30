<?php
namespace App\Test\TestCase\Controller;

use App\Controller\OrderStatusesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\OrderStatusesController Test Case
 */
class OrderStatusesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.order_statuses',
        'app.order_update_statuses',
        'app.orders',
        'app.users',
        'app.carts',
        'app.user_addresses',
        'app.user_details',
        'app.orders_products',
        'app.products',
        'app.products_attrs',
        'app.products_descriptions',
        'app.products_images',
        'app.colors',
        'app.products_prices',
        'app.brands',
        'app.brand_categories',
        'app.prod_brands',
        'app.products_brands',
        'app.categories',
        'app.category_details',
        'app.products_categories',
        'app.keywords',
        'app.products_keywords',
        'app.orders_shippings',
        'app.admins'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
