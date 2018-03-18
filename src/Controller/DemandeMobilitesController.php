<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DemandeMobilites Controller
 *
 * @property \App\Model\Table\DemandeMobilitesTable $DemandeMobilites
 *
 * @method \App\Model\Entity\DemandeMobilite[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandeMobilitesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Etudiants', 'Diplomes']
        ];
        $demandeMobilites = $this->paginate($this->DemandeMobilites);

        $this->set(compact('demandeMobilites'));
    }

    /**
     * View method
     *
     * @param string|null $id Demande Mobilite id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demandeMobilite = $this->DemandeMobilites->get($id, [
            'contain' => ['Etudiants', 'Diplomes', 'Contrats']
        ]);

        $this->set('demandeMobilite', $demandeMobilite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demandeMobilite = $this->DemandeMobilites->newEntity();
        if ($this->request->is('post')) {
            $demandeMobilite = $this->DemandeMobilites->patchEntity($demandeMobilite, $this->request->getData());
            if ($this->DemandeMobilites->save($demandeMobilite)) {
                $this->Flash->success(__('The demande mobilite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande mobilite could not be saved. Please, try again.'));
        }
        $etudiants = $this->DemandeMobilites->Etudiants->find('list', ['limit' => 200]);
        $diplomes = $this->DemandeMobilites->Diplomes->find('list', ['limit' => 200]);
        $this->set(compact('demandeMobilite', 'etudiants', 'diplomes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demande Mobilite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demandeMobilite = $this->DemandeMobilites->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demandeMobilite = $this->DemandeMobilites->patchEntity($demandeMobilite, $this->request->getData());
            if ($this->DemandeMobilites->save($demandeMobilite)) {
                $this->Flash->success(__('The demande mobilite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande mobilite could not be saved. Please, try again.'));
        }
        $etudiants = $this->DemandeMobilites->Etudiants->find('list', ['limit' => 200]);
        $diplomes = $this->DemandeMobilites->Diplomes->find('list', ['limit' => 200]);
        $this->set(compact('demandeMobilite', 'etudiants', 'diplomes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demande Mobilite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demandeMobilite = $this->DemandeMobilites->get($id);
        if ($this->DemandeMobilites->delete($demandeMobilite)) {
            $this->Flash->success(__('The demande mobilite has been deleted.'));
        } else {
            $this->Flash->error(__('The demande mobilite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
