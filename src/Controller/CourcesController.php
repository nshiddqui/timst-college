<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

/**
 * Cources Controller
 *
 * @property \App\Model\Table\CourcesTable $Cources
 * @method \App\Model\Entity\Cource[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CourcesController extends AppController
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
     * @param string|null $id Cource id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cource = $this->Cources->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('cource'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cource = $this->Cources->newEmptyEntity();
        if ($this->request->is('post')) {
            $cource = $this->Cources->patchEntity($cource, $this->request->getData());
            if ($this->Cources->save($cource)) {
                $this->Flash->success(__('The cource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cource could not be saved. Please, try again.'));
        }
        $this->set(compact('cource'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cource id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cource = $this->Cources->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cource = $this->Cources->patchEntity($cource, $this->request->getData());
            if ($this->Cources->save($cource)) {
                $this->Flash->success(__('The cource has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cource could not be saved. Please, try again.'));
        }
        $this->set(compact('cource'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cource id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cource = $this->Cources->get($id);
        if ($this->Cources->delete($cource)) {
            $this->Flash->success(__('The cource has been deleted.'));
        } else {
            $this->Flash->error(__('The cource could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
