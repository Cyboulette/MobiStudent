<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratsTable Test Case
 */
class ContratsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratsTable
     */
    public $Contrats;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contrats',
        'app.diplomes',
        'app.demande_mobilites',
        'app.programmes',
        'app.demande_financieres',
        'app.cours',
        'app.cours_contrats'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Contrats') ? [] : ['className' => ContratsTable::class];
        $this->Contrats = TableRegistry::get('Contrats', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Contrats);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
