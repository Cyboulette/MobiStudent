<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ContratsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ContratsController Test Case
 */
class ContratsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.contrats',
        'app.diplomes',
        'app.universites',
        'app.programmes',
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
