<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Applications Controller
 *
 * @property \App\Model\Table\ApplicationsTable $Applications
 */
class ApplicationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tenants', 'Properties', 'Units', 'Types']
        ];
        $this->set('applications', $this->paginate($this->Applications));
        $this->set('_serialize', ['applications']);
    }

    /**
     * View method
     *
     * @param string|null $id Application id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $application = $this->Applications->get($id, [
            'contain' => ['Tenants', 'Properties', 'Units', 'Types']
        ]);
        $this->set('application', $application);
        $this->set('_serialize', ['application']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $application = $this->Applications->newEntity();
        if ($this->request->is('post')) {
            $application = $this->Applications->patchEntity($application, $this->request->data);
            if ($this->Applications->save($application)) {
                $this->Flash->success(__('The application has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The application could not be saved. Please, try again.'));
            }
        }
        $tenants = $this->Applications->Tenants->find('list', ['limit' => 200]);
        $properties = $this->Applications->Properties->find('list', ['limit' => 200]);
        $units = $this->Applications->Units->find('list', ['limit' => 200]);
        $types = $this->Applications->Types->find('list', ['limit' => 200]);
        $this->set(compact('application', 'tenants', 'properties', 'units', 'types'));
        $this->set('_serialize', ['application']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Application id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $application = $this->Applications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $application = $this->Applications->patchEntity($application, $this->request->data);
            if ($this->Applications->save($application)) {
                $this->Flash->success(__('The application has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The application could not be saved. Please, try again.'));
            }
        }
        $tenants = $this->Applications->Tenants->find('list', ['limit' => 200]);
        $properties = $this->Applications->Properties->find('list', ['limit' => 200]);
        $units = $this->Applications->Units->find('list', ['limit' => 200]);
        $types = $this->Applications->Types->find('list', ['limit' => 200]);
        $this->set(compact('application', 'tenants', 'properties', 'units', 'types'));
        $this->set('_serialize', ['application']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Application id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $application = $this->Applications->get($id);
        if ($this->Applications->delete($application)) {
            $this->Flash->success(__('The application has been deleted.'));
        } else {
            $this->Flash->error(__('The application could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
