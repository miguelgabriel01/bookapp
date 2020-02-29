<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lend Controller
 *
 * @property \App\Model\Table\LendTable $Lend
 *
 * @method \App\Model\Entity\Lend[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LendController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Books'],
        ];
        $lend = $this->paginate($this->Lend);

        $this->set(compact('lend'));
    }

    /**
     * View method
     *
     * @param string|null $id Lend id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lend = $this->Lend->get($id, [
            'contain' => ['Users', 'Books'],
        ]);

        $this->set('lend', $lend);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lend = $this->Lend->newEntity();
        if ($this->request->is('post')) {
            $lend = $this->Lend->patchEntity($lend, $this->request->getData());
            if ($this->Lend->save($lend)) {
                $this->Flash->success(__('The lend has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lend could not be saved. Please, try again.'));
        }
        $users = $this->Lend->Users->find('list', ['limit' => 200]);
        $books = $this->Lend->Books->find('list', ['limit' => 200]);
        $this->set(compact('lend', 'users', 'books'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lend id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lend = $this->Lend->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lend = $this->Lend->patchEntity($lend, $this->request->getData());
            if ($this->Lend->save($lend)) {
                $this->Flash->success(__('The lend has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lend could not be saved. Please, try again.'));
        }
        $users = $this->Lend->Users->find('list', ['limit' => 200]);
        $books = $this->Lend->Books->find('list', ['limit' => 200]);
        $this->set(compact('lend', 'users', 'books'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lend id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lend = $this->Lend->get($id);
        if ($this->Lend->delete($lend)) {
            $this->Flash->success(__('The lend has been deleted.'));
        } else {
            $this->Flash->error(__('The lend could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
