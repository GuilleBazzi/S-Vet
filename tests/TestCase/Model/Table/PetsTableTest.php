<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PetsTable Test Case
 */
class PetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PetsTable
     */
    public $Pets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pets',
        'app.vaccines',
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
        $config = TableRegistry::exists('Pets') ? [] : ['className' => PetsTable::class];
        $this->Pets = TableRegistry::get('Pets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Pets);

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
