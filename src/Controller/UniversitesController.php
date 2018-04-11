<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Universites Controller
 *
 * @property \App\Model\Table\UniversitesTable $Universites
 *
 * @method \App\Model\Entity\Universite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UniversitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $universites = $this->paginate($this->Universites);

        $this->set(compact('universites'));
    }

    /**
     * View method
     *
     * @param string|null $id Universite id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $universite = $this->Universites->get($id, [
            'contain' => ['Programmes', 'Diplomes']
        ]);

        $universite->contrats = $universite->getContrats($universite->id);

        $this->set('universite', $universite);
    }
}
