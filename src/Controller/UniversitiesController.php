<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

/**
 * Universities Controller
 *
 * @property \App\Model\Table\UniversitiesTable $Universities
 * @method \App\Model\Entity\University[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UniversitiesController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        if ($this->Authentication->getIdentityData('role') != 1) {
            throw new UnauthorizedException('Not Authorized');
        }
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
    }

    /**
     * View method
     *
     * @param string|null $id University id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $university = $this->Universities->get($id, [
            'contain' => ['States', 'Students'],
        ]);

        $this->set(compact('university'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $university = $this->Universities->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['user']['role'] = 3;
            $university = $this->Universities->patchEntity($university, $data);
            if ($this->Universities->save($university)) {
                $this->Flash->success(__('The university has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The university could not be saved. Please, try again.'));
        }
        $states = $this->Universities->States->find('list', ['limit' => 200])->all();
        $this->set(compact('university', 'states'));
    }

    /**
     * Edit method
     *
     * @param string|null $id University id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $university = $this->Universities->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            if (empty($data['user']['password'])) {
                unset($data['user']['password']);
            }
            $university = $this->Universities->patchEntity($university, $data);
            if ($this->Universities->save($university)) {
                $this->Flash->success(__('The university has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The university could not be saved. Please, try again.'));
        }
        $states = $this->Universities->States->find('list', ['limit' => 200])->all();
        $this->set(compact('university', 'states'));
    }

    /**
     * Delete method
     *
     * @param string|null $id University id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $university = $this->Universities->get($id);
        if ($this->Universities->delete($university)) {
            $this->Flash->success(__('The university has been deleted.'));
        } else {
            $this->Flash->error(__('The university could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
