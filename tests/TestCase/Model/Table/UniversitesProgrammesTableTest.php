<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UniversitesProgrammesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UniversitesProgrammesTable Test Case
 */
class UniversitesProgrammesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UniversitesProgrammesTable
     */
    public $UniversitesProgrammes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.universites_programmes',
        'app.universites',
        'app.diplomes',
        'app.contrats',
        'app.demande_mobilites',
        'app.etudiants',
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
        $config = TableRegistry::exists('UniversitesProgrammes') ? [] : ['className' => UniversitesProgrammesTable::class];
        $this->UniversitesProgrammes = TableRegistry::get('UniversitesProgrammes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UniversitesProgrammes);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
