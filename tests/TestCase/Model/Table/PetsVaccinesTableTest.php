<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PetsVaccinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PetsVaccinesTable Test Case
 */
class PetsVaccinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PetsVaccinesTable
     */
    public $PetsVaccines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('PetsVaccines') ? [] : ['className' => PetsVaccinesTable::class];
        $this->PetsVaccines = TableRegistry::get('PetsVaccines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PetsVaccines);

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
