<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgrammesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgrammesTable Test Case
 */
class ProgrammesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgrammesTable
     */
    public $Programmes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.programmes',
        'app.contrats',
        'app.diplomes',
        'app.universites',
        'app.demande_mobilites',
        'app.etudiants',
        'app.cours',
        'app.cours_contrats',
        'app.cours_diplomes',
        'app.demande_financieres',
        'app.universites_programmes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Programmes') ? [] : ['className' => ProgrammesTable::class];
        $this->Programmes = TableRegistry::get('Programmes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Programmes);

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
