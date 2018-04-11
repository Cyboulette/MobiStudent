<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cours Controller
 *
 * @property \App\Model\Table\CoursTable $Cours
 *
 * @method \App\Model\Entity\Cour[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $cours = $this->paginate($this->Cours);

        $this->set(compact('cours'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cour = $this->Cours->newEntity();
        if ($this->request->is('post')) {
            $cour = $this->Cours->patchEntity($cour, $this->request->getData());
            if ($this->Cours->save($cour)) {
                $this->Flash->success(__('Le cours a bien été sauvegardé.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de sauvegarder le cours, réessayez.'));
        }
        $contrats = $this->Cours->Contrats->find('list', ['limit' => 200]);
        $cours = $this->Cours->Cours->find('list', ['limit' => 200]);
        $diplomes = $this->Cours->Diplomes->find('list', ['limit' => 200]);
        $this->set(compact('cour', 'contrats', 'cours', 'diplomes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cour = $this->Cours->get($id, [
            'contain' => ['Contrats', 'Diplomes']
        ]);
        $cour->cours = $cour->findCours($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $cour = $this->Cours->patchEntity($cour, $this->request->getData());
            if ($this->Cours->save($cour)) {
                $this->Flash->success(__('Le cours a bien été modifié.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Impossible de modifier le cours, réessayez.'));
        }
        $contrats = $this->Cours->Contrats->find('list', ['limit' => 200]);
        $cours = $this->Cours->Cours->find('list', ['limit' => 200]);
        $diplomes = $this->Cours->Diplomes->find('list', ['limit' => 200]);
        $this->set(compact('cour', 'contrats', 'cours', 'diplomes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cour = $this->Cours->get($id);
        if ($this->Cours->delete($cour)) {
            $this->Flash->success(__('Le cours a bien été supprimé.'));
        } else {
            $this->Flash->error(__('Impossible de supprimer le cours, réessayez.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
