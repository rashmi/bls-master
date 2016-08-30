<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConfigrationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConfigrationsTable Test Case
 */
class ConfigrationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ConfigrationsTable
     */
    public $Configrations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.configrations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Configrations') ? [] : ['className' => 'App\Model\Table\ConfigrationsTable'];
        $this->Configrations = TableRegistry::get('Configrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Configrations);

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
}
