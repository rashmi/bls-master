<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserAddressesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserAddressesTable Test Case
 */
class UserAddressesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserAddressesTable
     */
    public $UserAddresses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_addresses',
        'app.users',
        'app.carts',
        'app.orders',
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
        $config = TableRegistry::exists('UserAddresses') ? [] : ['className' => 'App\Model\Table\UserAddressesTable'];
        $this->UserAddresses = TableRegistry::get('UserAddresses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserAddresses);

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
