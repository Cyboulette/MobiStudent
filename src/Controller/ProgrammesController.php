<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Programmes Controller
 *
 * @property \App\Model\Table\ProgrammesTable $Programmes
 *
 * @method \App\Model\Entity\Programme[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProgrammesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $programmes = $this->paginate($this->Programmes);

        $this->set(compact('programmes'));
    }

    /**
     * View method
     *
     * @param string|null $id Programme id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programme = $this->Programmes->get($id, [
            'contain' => ['Universites', 'Contrats']
        ]);

        $this->set('programme', $programme);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programme = $this->Programmes->newEntity();
        if ($this->request->is('post')) {
            $programme = $this->Programmes->patchEntity($programme, $this->request->getData());
            if ($this->Programmes->save($programme)) {
                $this->Flash->success(__('The programme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programme could not be saved. Please, try again.'));
        }
        $universites = $this->Programmes->Universites->find('list', ['limit' => 200]);
        $this->set(compact('programme', 'universites'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Programme id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programme = $this->Programmes->get($id, [
            'contain' => ['Universites']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programme = $this->Programmes->patchEntity($programme, $this->request->getData());
            if ($this->Programmes->save($programme)) {
                $this->Flash->success(__('The programme has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The programme could not be saved. Please, try again.'));
        }
        $universites = $this->Programmes->Universites->find('list', ['limit' => 200]);
        $this->set(compact('programme', 'universites'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Programme id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programme = $this->Programmes->get($id);
        if ($this->Programmes->delete($programme)) {
            $this->Flash->success(__('The programme has been deleted.'));
        } else {
            $this->Flash->error(__('The programme could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
