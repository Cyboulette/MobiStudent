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

        $this->set('universite', $universite);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $universite = $this->Universites->newEntity();
        if ($this->request->is('post')) {
            $universite = $this->Universites->patchEntity($universite, $this->request->getData());
            if ($this->Universites->save($universite)) {
                $this->Flash->success(__('The universite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The universite could not be saved. Please, try again.'));
        }
        $programmes = $this->Universites->Programmes->find('list', ['limit' => 200]);
        $this->set(compact('universite', 'programmes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Universite id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $universite = $this->Universites->get($id, [
            'contain' => ['Programmes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $universite = $this->Universites->patchEntity($universite, $this->request->getData());
            if ($this->Universites->save($universite)) {
                $this->Flash->success(__('The universite has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The universite could not be saved. Please, try again.'));
        }
        $programmes = $this->Universites->Programmes->find('list', ['limit' => 200]);
        $this->set(compact('universite', 'programmes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Universite id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $universite = $this->Universites->get($id);
        if ($this->Universites->delete($universite)) {
            $this->Flash->success(__('The universite has been deleted.'));
        } else {
            $this->Flash->error(__('The universite could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
