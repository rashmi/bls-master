<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProductsPricesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProductsPricesController Test Case
 */
class ProductsPricesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.products_prices',
        'app.products',
        'app.products_attrs',
        'app.brands',
        'app.brand_categories',
        'app.prod_brands',
        'app.products_images',
        'app.colors',
        'app.products_marketing_images',
        'app.products_promos',
        'app.promo1_discount_a_products',
        'app.promo1_discount_b_products',
        'app.promo1_discount_c_products',
        'app.promo1_discount_d_products',
        'app.promo1_discount_e_products',
        'app.promo1_foc_products',
        'app.promo2_discount_a_products',
        'app.promo2_discount_b_products',
        'app.promo2_discount_c_products',
        'app.promo2_discount_d_products',
        'app.promo2_discount_e_products',
        'app.promo2_foc_products',
        'app.promo3_discount_a_products',
        'app.promo3_discount_b_products',
        'app.promo3_discount_c_products',
        'app.promo3_discount_d_products',
        'app.promo3_discount_e_products',
        'app.promo3_foc_products',
        'app.products_relateds',
        'app.orders',
        'app.users',
        'app.carts',
        'app.user_addresses',
        'app.user_details',
        'app.order_update_statuses',
        'app.order_statuses',
        'app.admins',
        'app.orders_products',
        'app.orders_shippings',
        'app.categories',
        'app.category_details',
        'app.products_categories'
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
