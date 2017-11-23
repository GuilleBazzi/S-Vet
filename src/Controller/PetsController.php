<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pets Controller
 *
 * @property \App\Model\Table\PetsTable $Pets
 *
 * @method \App\Model\Entity\Pet[] paginate($object = null, array $settings = [])
 */
class PetsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pets = $this->paginate($this->Pets);

        $this->set(compact('pets'));
        $this->set('_serialize', ['pets']);

//        $pets = $this->paginate($this->Pets);
//
//        $this->loadModel('Species');
//        $species = $this->Species->find('all');
//        $this->set('species',$species);            
//        
//        $this->set(compact('pets', 'species'));
//        $this->set('_serialize', ['pets', 'species']);


        }

    /**
     * View method
     *
     * @param string|null $id Pet id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pet = $this->Pets->get($id, [
            'contain' => ['Vaccines']
        ]);

        $this->set('pet', $pet);
        $this->set('_serialize', ['pet']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pet = $this->Pets->newEntity();
        if ($this->request->is('post')) {
            $pet = $this->Pets->patchEntity($pet, $this->request->getData());
            if ($this->Pets->save($pet)) {
                $this->Flash->success(__('The pet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pet could not be saved. Please, try again.'));
        }
        $vaccines = $this->Pets->Vaccines->find('list', ['limit' => 200]);
        $this->set(compact('pet', 'vaccines'));
        $this->set('_serialize', ['pet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pet id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pet = $this->Pets->get($id, [
            'contain' => ['Vaccines']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pet = $this->Pets->patchEntity($pet, $this->request->getData());
            if ($this->Pets->save($pet)) {
                $this->Flash->success(__('The pet has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pet could not be saved. Please, try again.'));
        }
        $vaccines = $this->Pets->Vaccines->find('list', ['limit' => 200]);
        $this->set(compact('pet', 'vaccines'));
        $this->set('_serialize', ['pet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pet id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pet = $this->Pets->get($id);
        if ($this->Pets->delete($pet)) {
            $this->Flash->success(__('The pet has been deleted.'));
        } else {
            $this->Flash->error(__('The pet could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
