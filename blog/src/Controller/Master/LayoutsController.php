<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Layouts Controller
 *
 * @property \App\Model\Table\LayoutsTable $Layouts
 *
 * @method \App\Model\Entity\Layout[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LayoutsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $layouts = $this->paginate($this->Layouts);

        $this->set(compact('layouts'));
    }

    /**
     * View method
     *
     * @param string|null $id Layout id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $layout = $this->Layouts->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('layout', $layout);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $layout = $this->Layouts->newEntity();
        if ($this->request->is('post')) {
            $layout = $this->Layouts->patchEntity($layout, $this->request->getData());
            if ($this->Layouts->save($layout)) {
                $this->Flash->success(__('The layout has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The layout could not be saved. Please, try again.'));
        }
        $users = $this->Layouts->Users->find('list', ['limit' => 200]);
        $this->set(compact('layout', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Layout id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $layout = $this->Layouts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $layout = $this->Layouts->patchEntity($layout, $this->request->getData());
            if ($this->Layouts->save($layout)) {
                $this->Flash->success(__('The layout has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The layout could not be saved. Please, try again.'));
        }
        $users = $this->Layouts->Users->find('list', ['limit' => 200]);
        $this->set(compact('layout', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Layout id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $layout = $this->Layouts->get($id);
        if ($this->Layouts->delete($layout)) {
            $this->Flash->success(__('The layout has been deleted.'));
        } else {
            $this->Flash->error(__('The layout could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
