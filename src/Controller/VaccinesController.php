<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Vaccines Controller
 *
 * @property \App\Model\Table\VaccinesTable $Vaccines
 *
 * @method \App\Model\Entity\Vaccine[] paginate($object = null, array $settings = [])
 */
class VaccinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $vaccines = $this->paginate($this->Vaccines);

        $this->set(compact('vaccines'));
        $this->set('_serialize', ['vaccines']);
    }

    /**
     * View method
     *
     * @param string|null $id Vaccine id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaccine = $this->Vaccines->get($id, [
            'contain' => ['Pets']
        ]);

        $this->set('vaccine', $vaccine);
        $this->set('_serialize', ['vaccine']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaccine = $this->Vaccines->newEntity();
        if ($this->request->is('post')) {
            $vaccine = $this->Vaccines->patchEntity($vaccine, $this->request->getData());
            if ($this->Vaccines->save($vaccine)) {
                $this->Flash->success(__('The vaccine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaccine could not be saved. Please, try again.'));
        }
        $pets = $this->Vaccines->Pets->find('list', ['limit' => 200]);
        $this->set(compact('vaccine', 'pets'));
        $this->set('_serialize', ['vaccine']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaccine id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaccine = $this->Vaccines->get($id, [
            'contain' => ['Pets']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaccine = $this->Vaccines->patchEntity($vaccine, $this->request->getData());
            if ($this->Vaccines->save($vaccine)) {
                $this->Flash->success(__('The vaccine has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaccine could not be saved. Please, try again.'));
        }
        $pets = $this->Vaccines->Pets->find('list', ['limit' => 200]);
        $this->set(compact('vaccine', 'pets'));
        $this->set('_serialize', ['vaccine']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaccine id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaccine = $this->Vaccines->get($id);
        if ($this->Vaccines->delete($vaccine)) {
            $this->Flash->success(__('The vaccine has been deleted.'));
        } else {
            $this->Flash->error(__('The vaccine could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
