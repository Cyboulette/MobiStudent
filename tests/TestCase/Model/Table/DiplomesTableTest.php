<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiplomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiplomesTable Test Case
 */
class DiplomesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiplomesTable
     */
    public $Diplomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diplomes',
        'app.universites',
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
        $config = TableRegistry::exists('Diplomes') ? [] : ['className' => DiplomesTable::class];
        $this->Diplomes = TableRegistry::get('Diplomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diplomes);

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
