<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DeceasedsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DeceasedsTable Test Case
 */
class DeceasedsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DeceasedsTable
     */
    public $Deceaseds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.deceaseds'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Deceaseds') ? [] : ['className' => DeceasedsTable::class];
        $this->Deceaseds = TableRegistry::get('Deceaseds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Deceaseds);

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
