<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * RentalHistory Controller
 *
 * @property \App\Model\Table\RentalHistoryTable $RentalHistory
 */
class RentalHistoryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tenants', 'Owners']
        ];
        $this->set('rentalHistory', $this->paginate($this->RentalHistory));
        $this->set('_serialize', ['rentalHistory']);
    }

    /**
     * View method
     *
     * @param string|null $id Rental History id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rentalHistory = $this->RentalHistory->get($id, [
            'contain' => ['Tenants', 'Owners']
        ]);
        $this->set('rentalHistory', $rentalHistory);
        $this->set('_serialize', ['rentalHistory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rentalHistory = $this->RentalHistory->newEntity();
        if ($this->request->is('post')) {
            $rentalHistory = $this->RentalHistory->patchEntity($rentalHistory, $this->request->data);
            if ($this->RentalHistory->save($rentalHistory)) {
                $this->Flash->success(__('The rental history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rental history could not be saved. Please, try again.'));
            }
        }
        $tenants = $this->RentalHistory->Tenants->find('list', ['limit' => 200]);
        $owners = $this->RentalHistory->Owners->find('list', ['limit' => 200]);
        $this->set(compact('rentalHistory', 'tenants', 'owners'));
        $this->set('_serialize', ['rentalHistory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Rental History id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rentalHistory = $this->RentalHistory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rentalHistory = $this->RentalHistory->patchEntity($rentalHistory, $this->request->data);
            if ($this->RentalHistory->save($rentalHistory)) {
                $this->Flash->success(__('The rental history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The rental history could not be saved. Please, try again.'));
            }
        }
        $tenants = $this->RentalHistory->Tenants->find('list', ['limit' => 200]);
        $owners = $this->RentalHistory->Owners->find('list', ['limit' => 200]);
        $this->set(compact('rentalHistory', 'tenants', 'owners'));
        $this->set('_serialize', ['rentalHistory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Rental History id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rentalHistory = $this->RentalHistory->get($id);
        if ($this->RentalHistory->delete($rentalHistory)) {
            $this->Flash->success(__('The rental history has been deleted.'));
        } else {
            $this->Flash->error(__('The rental history could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
