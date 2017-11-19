<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CareRecord Controller
 *
 * @property \App\Model\Table\CareRecordTable $CareRecord
 *
 * @method \App\Model\Entity\CareRecord[] paginate($object = null, array $settings = [])
 */
class CareRecordController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $careRecord = $this->paginate($this->CareRecord);

        $this->set(compact('careRecord'));
        $this->set('_serialize', ['careRecord']);
    }

    /**
     * View method
     *
     * @param string|null $id Care Record id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $careRecord = $this->CareRecord->get($id, [
            'contain' => []
        ]);

        $this->set('careRecord', $careRecord);
        $this->set('_serialize', ['careRecord']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $careRecord = $this->CareRecord->newEntity();
        if ($this->request->is('post')) {
            $careRecord = $this->CareRecord->patchEntity($careRecord, $this->request->getData());
            if ($this->CareRecord->save($careRecord)) {
                $this->Flash->success(__('The care record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The care record could not be saved. Please, try again.'));
        }
        $this->set(compact('careRecord'));
        $this->set('_serialize', ['careRecord']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Care Record id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $careRecord = $this->CareRecord->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $careRecord = $this->CareRecord->patchEntity($careRecord, $this->request->getData());
            if ($this->CareRecord->save($careRecord)) {
                $this->Flash->success(__('The care record has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The care record could not be saved. Please, try again.'));
        }
        $this->set(compact('careRecord'));
        $this->set('_serialize', ['careRecord']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Care Record id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $careRecord = $this->CareRecord->get($id);
        if ($this->CareRecord->delete($careRecord)) {
            $this->Flash->success(__('The care record has been deleted.'));
        } else {
            $this->Flash->error(__('The care record could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
