<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersProductsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersProductsTable Test Case
 */
class OrdersProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersProductsTable
     */
    public $OrdersProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders_products',
        'app.orders',
        'app.users',
        'app.carts',
        'app.user_addresses',
        'app.user_details',
        'app.order_shippings',
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
        'app.products_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdersProducts') ? [] : ['className' => 'App\Model\Table\OrdersProductsTable'];
        $this->OrdersProducts = TableRegistry::get('OrdersProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersProducts);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
