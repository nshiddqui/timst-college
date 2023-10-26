<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

/**
 * ModeOfStudies Controller
 *
 * @property \App\Model\Table\ModeOfStudiesTable $ModeOfStudies
 * @method \App\Model\Entity\ModeOfStudy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ModeOfStudiesController extends AppController
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
        $modeOfStudies = $this->paginate($this->ModeOfStudies);

        $this->set(compact('modeOfStudies'));
    }

    /**
     * View method
     *
     * @param string|null $id Mode Of Study id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modeOfStudy = $this->ModeOfStudies->get($id, [
            'contain' => ['ProgrammeDetails'],
        ]);

        $this->set(compact('modeOfStudy'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modeOfStudy = $this->ModeOfStudies->newEmptyEntity();
        if ($this->request->is('post')) {
            $modeOfStudy = $this->ModeOfStudies->patchEntity($modeOfStudy, $this->request->getData());
            if ($this->ModeOfStudies->save($modeOfStudy)) {
                $this->Flash->success(__('The mode of study has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mode of study could not be saved. Please, try again.'));
        }
        $this->set(compact('modeOfStudy'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mode Of Study id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modeOfStudy = $this->ModeOfStudies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modeOfStudy = $this->ModeOfStudies->patchEntity($modeOfStudy, $this->request->getData());
            if ($this->ModeOfStudies->save($modeOfStudy)) {
                $this->Flash->success(__('The mode of study has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mode of study could not be saved. Please, try again.'));
        }
        $this->set(compact('modeOfStudy'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mode Of Study id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modeOfStudy = $this->ModeOfStudies->get($id);
        if ($this->ModeOfStudies->delete($modeOfStudy)) {
            $this->Flash->success(__('The mode of study has been deleted.'));
        } else {
            $this->Flash->error(__('The mode of study could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
