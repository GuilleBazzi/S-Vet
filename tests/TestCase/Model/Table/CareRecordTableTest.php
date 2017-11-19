<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CareRecordTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CareRecordTable Test Case
 */
class CareRecordTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CareRecordTable
     */
    public $CareRecord;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.care_record'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CareRecord') ? [] : ['className' => CareRecordTable::class];
        $this->CareRecord = TableRegistry::get('CareRecord', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CareRecord);

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
