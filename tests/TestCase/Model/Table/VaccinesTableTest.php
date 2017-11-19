<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VaccinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VaccinesTable Test Case
 */
class VaccinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VaccinesTable
     */
    public $Vaccines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vaccines',
        'app.pets',
        'app.pets_vaccines'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vaccines') ? [] : ['className' => VaccinesTable::class];
        $this->Vaccines = TableRegistry::get('Vaccines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vaccines);

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
