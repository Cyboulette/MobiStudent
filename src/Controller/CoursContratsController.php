<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursContrats Controller
 *
 * @property \App\Model\Table\CoursContratsTable $CoursContrats
 *
 * @method \App\Model\Entity\CoursContrat[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursContratsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cours', 'Contrats']
        ];
        $coursContrats = $this->paginate($this->CoursContrats);

        $this->set(compact('coursContrats'));
    }

    /**
     * View method
     *
     * @param string|null $id Cours Contrat id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursContrat = $this->CoursContrats->get($id, [
            'contain' => ['Cours', 'Contrats']
        ]);

        $this->set('coursContrat', $coursContrat);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursContrat = $this->CoursContrats->newEntity();
        if ($this->request->is('post')) {
            $coursContrat = $this->CoursContrats->patchEntity($coursContrat, $this->request->getData());
            if ($this->CoursContrats->save($coursContrat)) {
                $this->Flash->success(__('The cours contrat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cours contrat could not be saved. Please, try again.'));
        }
        $cours = $this->CoursContrats->Cours->find('list', ['limit' => 200]);
        $contrats = $this->CoursContrats->Contrats->find('list', ['limit' => 200]);
        $this->set(compact('coursContrat', 'cours', 'contrats'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cours Contrat id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursContrat = $this->CoursContrats->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursContrat = $this->CoursContrats->patchEntity($coursContrat, $this->request->getData());
            if ($this->CoursContrats->save($coursContrat)) {
                $this->Flash->success(__('The cours contrat has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cours contrat could not be saved. Please, try again.'));
        }
        $cours = $this->CoursContrats->Cours->find('list', ['limit' => 200]);
        $contrats = $this->CoursContrats->Contrats->find('list', ['limit' => 200]);
        $this->set(compact('coursContrat', 'cours', 'contrats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cours Contrat id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursContrat = $this->CoursContrats->get($id);
        if ($this->CoursContrats->delete($coursContrat)) {
            $this->Flash->success(__('The cours contrat has been deleted.'));
        } else {
            $this->Flash->error(__('The cours contrat could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
