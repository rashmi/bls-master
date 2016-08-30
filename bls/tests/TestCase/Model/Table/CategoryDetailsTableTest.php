<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CategoryDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CategoryDetailsTable Test Case
 */
class CategoryDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CategoryDetailsTable
     */
    public $CategoryDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.category_details',
        'app.categories',
        'app.prod_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CategoryDetails') ? [] : ['className' => 'App\Model\Table\CategoryDetailsTable'];
        $this->CategoryDetails = TableRegistry::get('CategoryDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CategoryDetails);

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
