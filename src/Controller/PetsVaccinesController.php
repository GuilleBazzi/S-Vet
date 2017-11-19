<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PetsVaccines Controller
 *
 * @property \App\Model\Table\PetsVaccinesTable $PetsVaccines
 *
 * @method \App\Model\Entity\PetsVaccine[] paginate($object = null, array $settings = [])
 */
class PetsVaccinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $petsVaccines = $this->paginate($this->PetsVaccines);

        $this->set(compact('petsVaccines'));
        $this->set('_serialize', ['petsVaccines']);
    }

    /**
     * View method
     *
     * @param string|null $id Pets Vaccine id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $petsVaccine = $this->PetsVaccines->get($id, [
            'contain' => []
        ]);

        $this->set('petsVaccine', $petsVaccine);
        $this->set('_serialize', ['petsVaccine']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $petsVaccine = $this->PetsVaccines->newEntity();
        if ($this->request->is('post')) {
            $petsVaccine = $this->PetsVaccines->patchEntity($petsVaccine, $this->request->getData());
            if ($this->PetsVaccines->save($petsVaccine)) {
                $this->Flash->success(__('The pets vaccine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pets vaccine could not be saved. Please, try again.'));
        }
        $this->set(compact('petsVaccine'));
        $this->set('_serialize', ['petsVaccine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pets Vaccine id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $petsVaccine = $this->PetsVaccines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $petsVaccine = $this->PetsVaccines->patchEntity($petsVaccine, $this->request->getData());
            if ($this->PetsVaccines->save($petsVaccine)) {
                $this->Flash->success(__('The pets vaccine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pets vaccine could not be saved. Please, try again.'));
        }
        $this->set(compact('petsVaccine'));
        $this->set('_serialize', ['petsVaccine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pets Vaccine id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $petsVaccine = $this->PetsVaccines->get($id);
        if ($this->PetsVaccines->delete($petsVaccine)) {
            $this->Flash->success(__('The pets vaccine has been deleted.'));
        } else {
            $this->Flash->error(__('The pets vaccine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
