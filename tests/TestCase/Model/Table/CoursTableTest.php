<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursTable Test Case
 */
class CoursTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursTable
     */
    public $Cours;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cours',
        'app.contrats',
        'app.diplomes',
        'app.demande_mobilites',
        'app.programmes',
        'app.demande_financieres',
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
        $config = TableRegistry::exists('Cours') ? [] : ['className' => CoursTable::class];
        $this->Cours = TableRegistry::get('Cours', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cours);

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
