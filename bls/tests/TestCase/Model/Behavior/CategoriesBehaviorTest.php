<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\CategoriesBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\CategoriesBehavior Test Case
 */
class CategoriesBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\CategoriesBehavior
     */
    public $Categories;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Categories = new CategoriesBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Categories);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
