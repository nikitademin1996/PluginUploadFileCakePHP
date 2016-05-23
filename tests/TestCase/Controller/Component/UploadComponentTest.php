<?php
namespace PluginUploadFileCakePHP\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use PluginUploadFileCakePHP\Controller\Component\UploadComponent;

/**
 * PluginUploadFileCakePHP\Controller\Component\UploadComponent Test Case
 */
class UploadComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \PluginUploadFileCakePHP\Controller\Component\UploadComponent
     */
    public $Upload;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Upload = new UploadComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Upload);

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
