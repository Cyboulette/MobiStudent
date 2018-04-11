<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diplomes Controller
 *
 * @property \App\Model\Table\DiplomesTable $Diplomes
 *
 * @method \App\Model\Entity\Diplome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiplomesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Universites']
        ];
        $diplomes = $this->paginate($this->Diplomes);

        $this->set(compact('diplomes'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diplome = $this->Diplomes->newEntity();
        if ($this->request->is('post')) {
            $diplome = $this->Diplomes->patchEntity($diplome, $this->request->getData());
            if ($this->Diplomes->save($diplome)) {
                $this->Flash->success(__('Le diplôme a bien été sauvergardé.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de sauvegarder le diplôme, réessayez.'));
        }
        $universites = $this->Diplomes->Universites->find('list', ['limit' => 200]);
        $cours = $this->Diplomes->Cours->find('list', ['limit' => 200]);
        $this->set(compact('diplome', 'universites', 'cours'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Diplome id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diplome = $this->Diplomes->get($id, [
            'contain' => ['Cours']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diplome = $this->Diplomes->patchEntity($diplome, $this->request->getData());
            if ($this->Diplomes->save($diplome)) {
                $this->Flash->success(__('Le diplôme a bien été modifié.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de modifier le diplôme, réessayez.'));
        }
        $universites = $this->Diplomes->Universites->find('list', ['limit' => 200]);
        $cours = $this->Diplomes->Cours->find('list', ['limit' => 200]);
        $this->set(compact('diplome', 'universites', 'cours'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Diplome id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diplome = $this->Diplomes->get($id);
        if ($this->Diplomes->delete($diplome)) {
            $this->Flash->success(__('Le diplôme a bien été supprimé.'));
        } else {
            $this->Flash->error(__('Impossible de supprimer le diplôme, réessayez.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
