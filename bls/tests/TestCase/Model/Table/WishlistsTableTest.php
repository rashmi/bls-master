<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WishlistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WishlistsTable Test Case
 */
class WishlistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WishlistsTable
     */
    public $Wishlists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wishlists',
        'app.users',
        'app.carts',
        'app.orders',
        'app.user_addresses',
        'app.order_update_statuses',
        'app.order_statuses',
        'app.admins',
        'app.aros',
        'app.acos',
        'app.permissions',
        'app.groups',
        'app.orders_products',
        'app.products',
        'app.products_attrs',
        'app.brands',
        'app.brand_categories',
        'app.prod_brands',
        'app.products_images',
        'app.colors',
        'app.products_marketing_images',
        'app.products_prices',
        'app.products_promos',
        'app.products_relateds',
        'app.relatedproduct1',
        'app.categories',
        'app.category_details',
        'app.products_categories',
        'app.relatedproduct2',
        'app.relatedproduct3',
        'app.orders_shippings',
        'app.user_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Wishlists') ? [] : ['className' => 'App\Model\Table\WishlistsTable'];
        $this->Wishlists = TableRegistry::get('Wishlists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Wishlists);

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
