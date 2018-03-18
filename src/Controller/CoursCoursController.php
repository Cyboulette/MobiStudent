<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CoursCours Controller
 *
 * @property \App\Model\Table\CoursCoursTable $CoursCours
 *
 * @method \App\Model\Entity\CoursCour[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CoursCoursController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Cours']
        ];
        $coursCours = $this->paginate($this->CoursCours);

        $this->set(compact('coursCours'));
    }

    /**
     * View method
     *
     * @param string|null $id Cours Cour id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coursCour = $this->CoursCours->get($id, [
            'contain' => ['Cours']
        ]);

        $this->set('coursCour', $coursCour);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coursCour = $this->CoursCours->newEntity();
        if ($this->request->is('post')) {
            $coursCour = $this->CoursCours->patchEntity($coursCour, $this->request->getData());
            if ($this->CoursCours->save($coursCour)) {
                $this->Flash->success(__('The cours cour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cours cour could not be saved. Please, try again.'));
        }
        $cours = $this->CoursCours->Cours->find('list', ['limit' => 200]);
        $this->set(compact('coursCour', 'cours'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cours Cour id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coursCour = $this->CoursCours->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coursCour = $this->CoursCours->patchEntity($coursCour, $this->request->getData());
            if ($this->CoursCours->save($coursCour)) {
                $this->Flash->success(__('The cours cour has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cours cour could not be saved. Please, try again.'));
        }
        $cours = $this->CoursCours->Cours->find('list', ['limit' => 200]);
        $this->set(compact('coursCour', 'cours'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cours Cour id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coursCour = $this->CoursCours->get($id);
        if ($this->CoursCours->delete($coursCour)) {
            $this->Flash->success(__('The cours cour has been deleted.'));
        } else {
            $this->Flash->error(__('The cours cour could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
