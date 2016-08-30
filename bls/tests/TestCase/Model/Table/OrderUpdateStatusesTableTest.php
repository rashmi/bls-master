<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrderUpdateStatusesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrderUpdateStatusesTable Test Case
 */
class OrderUpdateStatusesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OrderUpdateStatusesTable
     */
    public $OrderUpdateStatuses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.order_update_statuses',
        'app.orders',
        'app.users',
        'app.carts',
        'app.user_addresses',
        'app.user_details',
        'app.orders_shippings',
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
        'app.orders_products',
        'app.order_statuses',
        'app.admins'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('OrderUpdateStatuses') ? [] : ['className' => 'App\Model\Table\OrderUpdateStatusesTable'];
        $this->OrderUpdateStatuses = TableRegistry::get('OrderUpdateStatuses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OrderUpdateStatuses);

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
