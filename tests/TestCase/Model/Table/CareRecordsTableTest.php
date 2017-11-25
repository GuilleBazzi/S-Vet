<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CareRecordsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CareRecordsTable Test Case
 */
class CareRecordsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CareRecordsTable
     */
    public $CareRecords;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.care_records'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CareRecords') ? [] : ['className' => CareRecordsTable::class];
        $this->CareRecords = TableRegistry::get('CareRecords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CareRecords);

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
