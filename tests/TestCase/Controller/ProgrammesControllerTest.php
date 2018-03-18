<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProgrammesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProgrammesController Test Case
 */
class ProgrammesControllerTest extends IntegrationTestCase
{

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
        'app.universites_programmes',
        'app.demande_mobilites',
        'app.etudiants',
        'app.cours',
        'app.cours_contrats',
        'app.cours_diplomes',
        'app.demande_financieres'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
