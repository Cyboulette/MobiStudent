<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DemandeFinancieresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DemandeFinancieresTable Test Case
 */
class DemandeFinancieresTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DemandeFinancieresTable
     */
    public $DemandeFinancieres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.demande_financieres',
        'app.contrats',
        'app.diplomes',
        'app.universites',
        'app.programmes',
        'app.universites_programmes',
        'app.demande_mobilites',
        'app.etudiants',
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
        $config = TableRegistry::exists('DemandeFinancieres') ? [] : ['className' => DemandeFinancieresTable::class];
        $this->DemandeFinancieres = TableRegistry::get('DemandeFinancieres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DemandeFinancieres);

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
