<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Etudiants Controller
 *
 * @property \App\Model\Table\EtudiantsTable $Etudiants
 *
 * @method \App\Model\Entity\Etudiant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EtudiantsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Diplomes']
        ];
        $etudiants = $this->paginate($this->Etudiants);

        $this->set(compact('etudiants'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $etudiant = $this->Etudiants->newEntity();
        if ($this->request->is('post')) {
            $etudiant = $this->Etudiants->patchEntity($etudiant, $this->request->getData());
            if ($this->Etudiants->save($etudiant)) {
                $this->Flash->success(__('Étudiant sauvegardé avec succès.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de sauvegarder l\'étudiant, réessayez.'));
        }
        $diplomes = $this->Etudiants->Diplomes->find('list', ['limit' => 200]);
        $this->set(compact('etudiant', 'diplomes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Etudiant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $etudiant = $this->Etudiants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $etudiant = $this->Etudiants->patchEntity($etudiant, $this->request->getData());
            if ($this->Etudiants->save($etudiant)) {
                $this->Flash->success(__('Étudiant modifié avec succès.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de modifier l\'étudiant, réessayez.'));
        }
        $diplomes = $this->Etudiants->Diplomes->find('list', ['limit' => 200]);
        $this->set(compact('etudiant', 'diplomes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Etudiant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $etudiant = $this->Etudiants->get($id);
        if ($this->Etudiants->delete($etudiant)) {
            $this->Flash->success(__('Étudiant supprimé avec succès.'));
        } else {
            $this->Flash->error(__('Impossible de supprimer l\'étudiant, réessayez.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
