<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniversitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniversitesTable Test Case
 */
class UniversitesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UniversitesTable
     */
    public $Universites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.universites',
        'app.diplomes',
        'app.contrats',
        'app.demande_mobilites',
        'app.etudiants',
        'app.programmes',
        'app.universites_programmes',
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
        $config = TableRegistry::exists('Universites') ? [] : ['className' => UniversitesTable::class];
        $this->Universites = TableRegistry::get('Universites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Universites);

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
