<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SliderImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SliderImagesTable Test Case
 */
class SliderImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SliderImagesTable
     */
    public $SliderImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.slider_images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('SliderImages') ? [] : ['className' => 'App\Model\Table\SliderImagesTable'];
        $this->SliderImages = TableRegistry::get('SliderImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->SliderImages);

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
