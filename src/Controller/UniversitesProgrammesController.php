<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UniversitesProgrammes Controller
 *
 * @property \App\Model\Table\UniversitesProgrammesTable $UniversitesProgrammes
 *
 * @method \App\Model\Entity\UniversitesProgramme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UniversitesProgrammesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Universites', 'Programmes']
        ];
        $universitesProgrammes = $this->paginate($this->UniversitesProgrammes);

        $this->set(compact('universitesProgrammes'));
    }

    /**
     * View method
     *
     * @param string|null $id Universites Programme id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $universitesProgramme = $this->UniversitesProgrammes->get($id, [
            'contain' => ['Universites', 'Programmes']
        ]);

        $this->set('universitesProgramme', $universitesProgramme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $universitesProgramme = $this->UniversitesProgrammes->newEntity();
        if ($this->request->is('post')) {
            $universitesProgramme = $this->UniversitesProgrammes->patchEntity($universitesProgramme, $this->request->getData());
            if ($this->UniversitesProgrammes->save($universitesProgramme)) {
                $this->Flash->success(__('The universites programme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The universites programme could not be saved. Please, try again.'));
        }
        $universites = $this->UniversitesProgrammes->Universites->find('list', ['limit' => 200]);
        $programmes = $this->UniversitesProgrammes->Programmes->find('list', ['limit' => 200]);
        $this->set(compact('universitesProgramme', 'universites', 'programmes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Universites Programme id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $universitesProgramme = $this->UniversitesProgrammes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $universitesProgramme = $this->UniversitesProgrammes->patchEntity($universitesProgramme, $this->request->getData());
            if ($this->UniversitesProgrammes->save($universitesProgramme)) {
                $this->Flash->success(__('The universites programme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The universites programme could not be saved. Please, try again.'));
        }
        $universites = $this->UniversitesProgrammes->Universites->find('list', ['limit' => 200]);
        $programmes = $this->UniversitesProgrammes->Programmes->find('list', ['limit' => 200]);
        $this->set(compact('universitesProgramme', 'universites', 'programmes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Universites Programme id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $universitesProgramme = $this->UniversitesProgrammes->get($id);
        if ($this->UniversitesProgrammes->delete($universitesProgramme)) {
            $this->Flash->success(__('The universites programme has been deleted.'));
        } else {
            $this->Flash->error(__('The universites programme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
