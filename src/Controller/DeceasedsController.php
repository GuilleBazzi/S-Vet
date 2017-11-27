<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Deceaseds Controller
 *
 * @property \App\Model\Table\DeceasedsTable $Deceaseds
 *
 * @method \App\Model\Entity\Deceased[] paginate($object = null, array $settings = [])
 */
class DeceasedsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $deceaseds = $this->paginate($this->Deceaseds);

        $this->set(compact('deceaseds'));
        $this->set('_serialize', ['deceaseds']);
    }

    /**
     * View method
     *
     * @param string|null $id Deceased id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deceased = $this->Deceaseds->get($id, [
            'contain' => []
        ]);

        $this->set('deceased', $deceased);
        $this->set('_serialize', ['deceased']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deceased = $this->Deceaseds->newEntity();
        if ($this->request->is('post')) {
            $deceased = $this->Deceaseds->patchEntity($deceased, $this->request->getData());
            if ($this->Deceaseds->save($deceased)) {
                $this->Flash->success(__('The deceased has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deceased could not be saved. Please, try again.'));
        }
        $this->set(compact('deceased'));
        $this->set('_serialize', ['deceased']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Deceased id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deceased = $this->Deceaseds->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deceased = $this->Deceaseds->patchEntity($deceased, $this->request->getData());
            if ($this->Deceaseds->save($deceased)) {
                $this->Flash->success(__('The deceased has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The deceased could not be saved. Please, try again.'));
        }
        $this->set(compact('deceased'));
        $this->set('_serialize', ['deceased']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Deceased id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deceased = $this->Deceaseds->get($id);
        if ($this->Deceaseds->delete($deceased)) {
            $this->Flash->success(__('The deceased has been deleted.'));
        } else {
            $this->Flash->error(__('The deceased could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
