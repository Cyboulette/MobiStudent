<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contrats Controller
 *
 * @property \App\Model\Table\ContratsTable $Contrats
 *
 * @method \App\Model\Entity\Contrat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContratsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Diplomes', 'DemandeMobilites', 'Programmes']
        ];
        $contrats = $this->paginate($this->Contrats);

        $this->set(compact('contrats'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contrat = $this->Contrats->newEntity();
        if ($this->request->is('post')) {
            $contrat = $this->Contrats->patchEntity($contrat, $this->request->getData());
            if ($this->Contrats->save($contrat)) {
                $this->Flash->success(__('Le contrat a bien été sauvegardé.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de sauvegarder le contrat, réessayez.'));
        }
        $diplomes = $this->Contrats->Diplomes->find('list', ['limit' => 200]);
        $demandeMobilites = $this->Contrats->DemandeMobilites->find('list', ['limit' => 200]);
        $programmes = $this->Contrats->Programmes->find('list', ['limit' => 200]);
        $cours = $this->Contrats->Cours->find('list', ['limit' => 200]);
        $this->set(compact('contrat', 'diplomes', 'demandeMobilites', 'programmes', 'cours'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contrat id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contrat = $this->Contrats->get($id, [
            'contain' => ['Cours']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contrat = $this->Contrats->patchEntity($contrat, $this->request->getData());
            if ($this->Contrats->save($contrat)) {
                $this->Flash->success(__('Le contrat a bien été modifié.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de supprimer le contrat, réessayez.'));
        }
        $diplomes = $this->Contrats->Diplomes->find('list', ['limit' => 200]);
        $demandeMobilites = $this->Contrats->DemandeMobilites->find('list', ['limit' => 200]);
        $programmes = $this->Contrats->Programmes->find('list', ['limit' => 200]);
        $cours = $this->Contrats->Cours->find('list', ['limit' => 200]);
        $this->set(compact('contrat', 'diplomes', 'demandeMobilites', 'programmes', 'cours'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contrat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contrat = $this->Contrats->get($id);
        if ($this->Contrats->delete($contrat)) {
            $this->Flash->success(__('Le contrat a bien été supprimé.'));
        } else {
            $this->Flash->error(__('Impossible de supprimer le contrat, réessayez.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
