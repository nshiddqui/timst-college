<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Students Controller
 *
 * @property \App\Model\Table\StudentsTable $Students
 * @method \App\Model\Entity\Student[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StudentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->DataTables->getQuery('Students');
        $query->where(['Students.university_id' => $this->Authentication->getIdentityData('university.id')]);
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
            'contain' => ['Universities', 'Genders', 'Categories', 'IdProofTypes', 'CommunicationDetails', 'ProgrammeDetails', 'QualificationDetails'],
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
            $data['user'] = [
                'role' => 3,
                'username' => $data['communication_detail']['email_address'],
                'email' => $data['communication_detail']['email_address'],
                'password' => $data['communication_detail']['contact_number']
            ];
            $data['university_id'] = $this->Authentication->getIdentityData('university.id');
            if (empty($data['university_id'])) {
                $data['university_id'] = 1;
            }
            $student = $this->Students->patchEntity($student, $data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $universities = $this->Students->Universities->find('list', ['limit' => 200])->all();
        $genders = $this->Students->Genders->find('list', ['limit' => 200])->all();
        $categories = $this->Students->Categories->find('list', ['limit' => 200])->all();
        $idProofTypes = $this->Students->IdProofTypes->find('list', ['limit' => 200])->all();
        $countries = $this->Students->CommunicationDetails->Countries->find('list', ['limit' => 200])->all();
        $courceTypes = $this->Students->ProgrammeDetails->CourceTypes->find('list', ['limit' => 200])->all();
        $faculties = $this->Students->ProgrammeDetails->Faculties->find('list', ['limit' => 200])->all();
        $cources = $this->Students->ProgrammeDetails->Cources->find('list', ['limit' => 200])->all();
        $streams = $this->Students->ProgrammeDetails->Streams->find('list', ['limit' => 200])->all();
        $modeOfStudies = $this->Students->ProgrammeDetails->ModeOfStudies->find('list', ['limit' => 200])->all();
        $this->set(compact('student', 'universities', 'genders', 'categories', 'idProofTypes', 'countries', 'courceTypes', 'faculties', 'cources', 'streams', 'modeOfStudies'));
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
            'contain' => [
                'CommunicationDetails',
                'ProgrammeDetails'
            ],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->getData());
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $universities = $this->Students->Universities->find('list', ['limit' => 200])->all();
        $genders = $this->Students->Genders->find('list', ['limit' => 200])->all();
        $categories = $this->Students->Categories->find('list', ['limit' => 200])->all();
        $idProofTypes = $this->Students->IdProofTypes->find('list', ['limit' => 200])->all();
        $countries = $this->Students->CommunicationDetails->Countries->find('list', ['limit' => 200])->all();
        $courceTypes = $this->Students->ProgrammeDetails->CourceTypes->find('list', ['limit' => 200])->all();
        $faculties = $this->Students->ProgrammeDetails->Faculties->find('list', ['limit' => 200])->all();
        $cources = $this->Students->ProgrammeDetails->Cources->find('list', ['limit' => 200])->all();
        $streams = $this->Students->ProgrammeDetails->Streams->find('list', ['limit' => 200])->all();
        $modeOfStudies = $this->Students->ProgrammeDetails->ModeOfStudies->find('list', ['limit' => 200])->all();
        $this->set(compact('student', 'universities', 'genders', 'categories', 'idProofTypes', 'countries', 'courceTypes', 'faculties', 'cources', 'streams', 'modeOfStudies'));
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
