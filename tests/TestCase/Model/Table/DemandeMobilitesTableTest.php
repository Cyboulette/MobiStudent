<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DemandeMobilitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DemandeMobilitesTable Test Case
 */
class DemandeMobilitesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DemandeMobilitesTable
     */
    public $DemandeMobilites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.demande_mobilites',
        'app.etudiants',
        'app.diplomes',
        'app.universites',
        'app.contrats',
        'app.programmes',
        'app.demande_financieres',
        'app.cours',
        'app.cours_contrats',
        'app.cours_diplomes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DemandeMobilites') ? [] : ['className' => DemandeMobilitesTable::class];
        $this->DemandeMobilites = TableRegistry::get('DemandeMobilites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DemandeMobilites);

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
