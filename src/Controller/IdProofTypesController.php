<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

/**
 * IdProofTypes Controller
 *
 * @property \App\Model\Table\IdProofTypesTable $IdProofTypes
 * @method \App\Model\Entity\IdProofType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class IdProofTypesController extends AppController
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
        $idProofTypes = $this->paginate($this->IdProofTypes);

        $this->set(compact('idProofTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Id Proof Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idProofType = $this->IdProofTypes->get($id, [
            'contain' => ['Students'],
        ]);

        $this->set(compact('idProofType'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idProofType = $this->IdProofTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $idProofType = $this->IdProofTypes->patchEntity($idProofType, $this->request->getData());
            if ($this->IdProofTypes->save($idProofType)) {
                $this->Flash->success(__('The id proof type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The id proof type could not be saved. Please, try again.'));
        }
        $this->set(compact('idProofType'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Id Proof Type id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idProofType = $this->IdProofTypes->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idProofType = $this->IdProofTypes->patchEntity($idProofType, $this->request->getData());
            if ($this->IdProofTypes->save($idProofType)) {
                $this->Flash->success(__('The id proof type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The id proof type could not be saved. Please, try again.'));
        }
        $this->set(compact('idProofType'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Id Proof Type id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idProofType = $this->IdProofTypes->get($id);
        if ($this->IdProofTypes->delete($idProofType)) {
            $this->Flash->success(__('The id proof type has been deleted.'));
        } else {
            $this->Flash->error(__('The id proof type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
