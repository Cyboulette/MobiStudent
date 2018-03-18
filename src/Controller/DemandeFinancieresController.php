<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DemandeFinancieres Controller
 *
 * @property \App\Model\Table\DemandeFinancieresTable $DemandeFinancieres
 *
 * @method \App\Model\Entity\DemandeFinanciere[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemandeFinancieresController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contrats']
        ];
        $demandeFinancieres = $this->paginate($this->DemandeFinancieres);

        $this->set(compact('demandeFinancieres'));
    }

    /**
     * View method
     *
     * @param string|null $id Demande Financiere id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demandeFinanciere = $this->DemandeFinancieres->get($id, [
            'contain' => ['Contrats']
        ]);

        $this->set('demandeFinanciere', $demandeFinanciere);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demandeFinanciere = $this->DemandeFinancieres->newEntity();
        if ($this->request->is('post')) {
            $demandeFinanciere = $this->DemandeFinancieres->patchEntity($demandeFinanciere, $this->request->getData());
            if ($this->DemandeFinancieres->save($demandeFinanciere)) {
                $this->Flash->success(__('The demande financiere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande financiere could not be saved. Please, try again.'));
        }
        $contrats = $this->DemandeFinancieres->Contrats->find('list', ['limit' => 200]);
        $this->set(compact('demandeFinanciere', 'contrats'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demande Financiere id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demandeFinanciere = $this->DemandeFinancieres->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demandeFinanciere = $this->DemandeFinancieres->patchEntity($demandeFinanciere, $this->request->getData());
            if ($this->DemandeFinancieres->save($demandeFinanciere)) {
                $this->Flash->success(__('The demande financiere has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demande financiere could not be saved. Please, try again.'));
        }
        $contrats = $this->DemandeFinancieres->Contrats->find('list', ['limit' => 200]);
        $this->set(compact('demandeFinanciere', 'contrats'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demande Financiere id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demandeFinanciere = $this->DemandeFinancieres->get($id);
        if ($this->DemandeFinancieres->delete($demandeFinanciere)) {
            $this->Flash->success(__('The demande financiere has been deleted.'));
        } else {
            $this->Flash->error(__('The demande financiere could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
