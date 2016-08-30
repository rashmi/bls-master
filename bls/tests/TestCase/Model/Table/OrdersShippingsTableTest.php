<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrdersShippingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrdersShippingsTable Test Case
 */
class OrdersShippingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrdersShippingsTable
     */
    public $OrdersShippings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.orders_shippings',
        'app.orders',
        'app.users',
        'app.carts',
        'app.user_addresses',
        'app.user_details',
        'app.order_update_statuses',
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
        'app.orders_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrdersShippings') ? [] : ['className' => 'App\Model\Table\OrdersShippingsTable'];
        $this->OrdersShippings = TableRegistry::get('OrdersShippings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrdersShippings);

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
