<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursDiplomesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursDiplomesTable Test Case
 */
class CoursDiplomesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursDiplomesTable
     */
    public $CoursDiplomes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cours_diplomes',
        'app.diplomes',
        'app.universites',
        'app.contrats',
        'app.demande_mobilites',
        'app.programmes',
        'app.demande_financieres',
        'app.cours',
        'app.cours_contrats',
        'app.etudiants'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CoursDiplomes') ? [] : ['className' => CoursDiplomesTable::class];
        $this->CoursDiplomes = TableRegistry::get('CoursDiplomes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoursDiplomes);

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
