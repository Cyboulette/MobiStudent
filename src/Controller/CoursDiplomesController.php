<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursDiplomes Controller
 *
 * @property \App\Model\Table\CoursDiplomesTable $CoursDiplomes
 *
 * @method \App\Model\Entity\CoursDiplome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursDiplomesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Diplomes', 'Cours']
        ];
        $coursDiplomes = $this->paginate($this->CoursDiplomes);

        $this->set(compact('coursDiplomes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cours Diplome id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursDiplome = $this->CoursDiplomes->get($id, [
            'contain' => ['Diplomes', 'Cours']
        ]);

        $this->set('coursDiplome', $coursDiplome);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursDiplome = $this->CoursDiplomes->newEntity();
        if ($this->request->is('post')) {
            $coursDiplome = $this->CoursDiplomes->patchEntity($coursDiplome, $this->request->getData());
            if ($this->CoursDiplomes->save($coursDiplome)) {
                $this->Flash->success(__('The cours diplome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cours diplome could not be saved. Please, try again.'));
        }
        $diplomes = $this->CoursDiplomes->Diplomes->find('list', ['limit' => 200]);
        $cours = $this->CoursDiplomes->Cours->find('list', ['limit' => 200]);
        $this->set(compact('coursDiplome', 'diplomes', 'cours'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cours Diplome id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursDiplome = $this->CoursDiplomes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursDiplome = $this->CoursDiplomes->patchEntity($coursDiplome, $this->request->getData());
            if ($this->CoursDiplomes->save($coursDiplome)) {
                $this->Flash->success(__('The cours diplome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cours diplome could not be saved. Please, try again.'));
        }
        $diplomes = $this->CoursDiplomes->Diplomes->find('list', ['limit' => 200]);
        $cours = $this->CoursDiplomes->Cours->find('list', ['limit' => 200]);
        $this->set(compact('coursDiplome', 'diplomes', 'cours'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cours Diplome id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursDiplome = $this->CoursDiplomes->get($id);
        if ($this->CoursDiplomes->delete($coursDiplome)) {
            $this->Flash->success(__('The cours diplome has been deleted.'));
        } else {
            $this->Flash->error(__('The cours diplome could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
