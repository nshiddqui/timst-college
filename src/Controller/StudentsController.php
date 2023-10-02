<?php

declare(strict_types=1);

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

/**
 * Students Controller
 *
 * @property \App\Model\Table\StudentsTable $Students
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsController extends AppController
{

    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        if (!in_array($this->Authentication->getIdentityData('role'), [1, 2])) {
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
        if ($this->Authentication->getIdentityData('role') == 2) {
            $query = $this->DataTables->getQuery('Students');
            $query->where(['Students.university_id' => $this->Authentication->getIdentityData('university.id')]);
        }
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => ['Users', 'States', 'Genders', 'Universities', 'Cources', 'Categories'],
        ]);

        $this->set(compact('student'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $student = $this->Students->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if ($this->Authentication->getIdentityData('role') == 2) {
                $data['university_id'] = $this->Authentication->getIdentityData('university.id');
            }
            $data['user']['role'] = 3;
            $postImage = $this->request->getData('image');
            $name = $postImage->getClientFilename();
            $type = $postImage->getClientMediaType();
            $targetPath = WWW_ROOT . 'img' . DS . 'files' . DS . $name;
            if ($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png') {
                if (!empty($name)) {
                    if ($postImage->getSize() > 0 && $postImage->getError() == 0) {
                        $postImage->moveTo($targetPath);
                        $data['image'] = '/img' . DS . 'files' . DS . $name;;
                    }
                }
            } else {
                unset($data['image']);
            }
            $student = $this->Students->patchEntity($student, $data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $users = $this->Students->Users->find('list', ['limit' => 200])->all();
        $states = $this->Students->States->find('list', ['limit' => 200])->all();
        $genders = $this->Students->Genders->find('list', ['limit' => 200])->all();
        if ($this->Authentication->getIdentityData('role') == 1) {
            $universities = $this->Students->Universities->find('list', ['limit' => 200])->all();
        } else {
            $universities = [];
        }
        $cources = $this->Students->Cources->find('list', ['limit' => 200])->all();
        $categories = $this->Students->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('student', 'users', 'states', 'genders', 'universities', 'cources', 'categories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            if ($this->Authentication->getIdentityData('role') == 2) {
                $data['university_id'] = $this->Authentication->getIdentityData('university.id');
            }
            if (empty($data['user']['password'])) {
                unset($data['user']['password']);
            }
            $data['user']['role'] = 3;
            $postImage = $this->request->getData('image');
            $name = $postImage->getClientFilename();
            $type = $postImage->getClientMediaType();
            $targetPath = WWW_ROOT . 'img' . DS . 'files' . DS . $name;
            if ($type == 'image/jpeg' || $type == 'image/jpg' || $type == 'image/png') {
                if (!empty($name)) {
                    if ($postImage->getSize() > 0 && $postImage->getError() == 0) {
                        $postImage->moveTo($targetPath);
                        $data['image'] = '/img' . DS . 'files' . DS . $name;;
                    }
                }
            } else {
                unset($data['image']);
            }
            $student = $this->Students->patchEntity($student, $data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $users = $this->Students->Users->find('list', ['limit' => 200])->all();
        $states = $this->Students->States->find('list', ['limit' => 200])->all();
        $genders = $this->Students->Genders->find('list', ['limit' => 200])->all();
        if ($this->Authentication->getIdentityData('role') == 1) {
            $universities = $this->Students->Universities->find('list', ['limit' => 200])->all();
        } else {
            $universities = [];
        }
        $cources = $this->Students->Cources->find('list', ['limit' => 200])->all();
        $categories = $this->Students->Categories->find('list', ['limit' => 200])->all();
        $this->set(compact('student', 'users', 'states', 'genders', 'universities', 'cources', 'categories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->get($id);
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
