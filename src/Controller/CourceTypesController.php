<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

/**
 * CourceTypes Controller
 *
 * @property \App\Model\Table\CourceTypesTable $CourceTypes
 * @method \App\Model\Entity\CourceType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CourceTypesController extends AppController
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
        $courceTypes = $this->paginate($this->CourceTypes);

        $this->set(compact('courceTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Cource Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $courceType = $this->CourceTypes->get($id, [
            'contain' => ['ProgrammeDetails'],
        ]);

        $this->set(compact('courceType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $courceType = $this->CourceTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $courceType = $this->CourceTypes->patchEntity($courceType, $this->request->getData());
            if ($this->CourceTypes->save($courceType)) {
                $this->Flash->success(__('The cource type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cource type could not be saved. Please, try again.'));
        }
        $this->set(compact('courceType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cource Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $courceType = $this->CourceTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $courceType = $this->CourceTypes->patchEntity($courceType, $this->request->getData());
            if ($this->CourceTypes->save($courceType)) {
                $this->Flash->success(__('The cource type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cource type could not be saved. Please, try again.'));
        }
        $this->set(compact('courceType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cource Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $courceType = $this->CourceTypes->get($id);
        if ($this->CourceTypes->delete($courceType)) {
            $this->Flash->success(__('The cource type has been deleted.'));
        } else {
            $this->Flash->error(__('The cource type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
