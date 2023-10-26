<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="students view content">
            <h3><?= h($student->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('University') ?></th>
                    <td><?= $student->has('university') ? $this->Html->link($student->university->name, ['controller' => 'Universities', 'action' => 'view', $student->university->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Candidate Name') ?></th>
                    <td><?= h($student->candidate_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Father Name') ?></th>
                    <td><?= h($student->father_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mother Name') ?></th>
                    <td><?= h($student->mother_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($student->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= $student->has('gender') ? $this->Html->link($student->gender->name, ['controller' => 'Genders', 'action' => 'view', $student->gender->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Category') ?></th>
                    <td><?= $student->has('category') ? $this->Html->link($student->category->name, ['controller' => 'Categories', 'action' => 'view', $student->category->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Proof Type') ?></th>
                    <td><?= $student->has('id_proof_type') ? $this->Html->link($student->id_proof_type->name, ['controller' => 'IdProofTypes', 'action' => 'view', $student->id_proof_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Proof No') ?></th>
                    <td><?= h($student->id_proof_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Document Front') ?></th>
                    <td><?= h($student->document_front) ?></td>
                </tr>
                <tr>
                    <th><?= __('Document Back') ?></th>
                    <td><?= h($student->document_back) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Id') ?></th>
                    <td><?= $this->Number->format($student->user_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($student->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($student->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($student->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Are You Employed') ?></th>
                    <td><?= $student->are_you_employed ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Communication Details') ?></h4>
                <?php if (!empty($student->communication_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Contact Number') ?></th>
                            <th><?= __('Email Address') ?></th>
                            <th><?= __('Father Contact No') ?></th>
                            <th><?= __('Mother Contact No') ?></th>
                            <th><?= __('Country Id') ?></th>
                            <th><?= __('Nationality') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('Pincode') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->communication_details as $communicationDetails) : ?>
                        <tr>
                            <td><?= h($communicationDetails->id) ?></td>
                            <td><?= h($communicationDetails->student_id) ?></td>
                            <td><?= h($communicationDetails->contact_number) ?></td>
                            <td><?= h($communicationDetails->email_address) ?></td>
                            <td><?= h($communicationDetails->father_contact_no) ?></td>
                            <td><?= h($communicationDetails->mother_contact_no) ?></td>
                            <td><?= h($communicationDetails->country_id) ?></td>
                            <td><?= h($communicationDetails->nationality) ?></td>
                            <td><?= h($communicationDetails->address) ?></td>
                            <td><?= h($communicationDetails->pincode) ?></td>
                            <td><?= h($communicationDetails->created) ?></td>
                            <td><?= h($communicationDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'CommunicationDetails', 'action' => 'view', $communicationDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'CommunicationDetails', 'action' => 'edit', $communicationDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'CommunicationDetails', 'action' => 'delete', $communicationDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $communicationDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Programme Details') ?></h4>
                <?php if (!empty($student->programme_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Cource Type Id') ?></th>
                            <th><?= __('Faculty Id') ?></th>
                            <th><?= __('Cource Id') ?></th>
                            <th><?= __('Stream Id') ?></th>
                            <th><?= __('Year') ?></th>
                            <th><?= __('Month Session') ?></th>
                            <th><?= __('Session') ?></th>
                            <th><?= __('Mode Of Study Id') ?></th>
                            <th><?= __('Hostel Facility') ?></th>
                            <th><?= __('Application Fee') ?></th>
                            <th><?= __('Duration') ?></th>
                            <th><?= __('Total Fees') ?></th>
                            <th><?= __('Paying Fees') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->programme_details as $programmeDetails) : ?>
                        <tr>
                            <td><?= h($programmeDetails->id) ?></td>
                            <td><?= h($programmeDetails->student_id) ?></td>
                            <td><?= h($programmeDetails->cource_type_id) ?></td>
                            <td><?= h($programmeDetails->faculty_id) ?></td>
                            <td><?= h($programmeDetails->cource_id) ?></td>
                            <td><?= h($programmeDetails->stream_id) ?></td>
                            <td><?= h($programmeDetails->year) ?></td>
                            <td><?= h($programmeDetails->month_session) ?></td>
                            <td><?= h($programmeDetails->session) ?></td>
                            <td><?= h($programmeDetails->mode_of_study_id) ?></td>
                            <td><?= h($programmeDetails->hostel_facility) ?></td>
                            <td><?= h($programmeDetails->application_fee) ?></td>
                            <td><?= h($programmeDetails->duration) ?></td>
                            <td><?= h($programmeDetails->total_fees) ?></td>
                            <td><?= h($programmeDetails->paying_fees) ?></td>
                            <td><?= h($programmeDetails->created) ?></td>
                            <td><?= h($programmeDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ProgrammeDetails', 'action' => 'view', $programmeDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ProgrammeDetails', 'action' => 'edit', $programmeDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ProgrammeDetails', 'action' => 'delete', $programmeDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programmeDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Qualification Details') ?></h4>
                <?php if (!empty($student->qualification_details)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Student Id') ?></th>
                            <th><?= __('Secondary Year Of Passing') ?></th>
                            <th><?= __('Sr Secondary Year Of Passing') ?></th>
                            <th><?= __('Graduation Year Of Passing') ?></th>
                            <th><?= __('Post Graduation Year Of Passing') ?></th>
                            <th><?= __('Other Year Of Passing') ?></th>
                            <th><?= __('Secondary University') ?></th>
                            <th><?= __('Sr Secondary University') ?></th>
                            <th><?= __('Graduation University') ?></th>
                            <th><?= __('Post Graduation University') ?></th>
                            <th><?= __('Other University') ?></th>
                            <th><?= __('Secondary Percentage') ?></th>
                            <th><?= __('Sr Secondary Percentage') ?></th>
                            <th><?= __('Graduation Percentage') ?></th>
                            <th><?= __('Post Graduation Percentage') ?></th>
                            <th><?= __('Other Percentage') ?></th>
                            <th><?= __('Secondary Documents') ?></th>
                            <th><?= __('Sr Secondary Documents') ?></th>
                            <th><?= __('Graduation Documents') ?></th>
                            <th><?= __('Post Graduation Documents') ?></th>
                            <th><?= __('Other Documents') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($student->qualification_details as $qualificationDetails) : ?>
                        <tr>
                            <td><?= h($qualificationDetails->id) ?></td>
                            <td><?= h($qualificationDetails->student_id) ?></td>
                            <td><?= h($qualificationDetails->secondary_year_of_passing) ?></td>
                            <td><?= h($qualificationDetails->sr_secondary_year_of_passing) ?></td>
                            <td><?= h($qualificationDetails->graduation_year_of_passing) ?></td>
                            <td><?= h($qualificationDetails->post_graduation_year_of_passing) ?></td>
                            <td><?= h($qualificationDetails->other_year_of_passing) ?></td>
                            <td><?= h($qualificationDetails->secondary_university) ?></td>
                            <td><?= h($qualificationDetails->sr_secondary_university) ?></td>
                            <td><?= h($qualificationDetails->graduation_university) ?></td>
                            <td><?= h($qualificationDetails->post_graduation_university) ?></td>
                            <td><?= h($qualificationDetails->other_university) ?></td>
                            <td><?= h($qualificationDetails->secondary_percentage) ?></td>
                            <td><?= h($qualificationDetails->sr_secondary_percentage) ?></td>
                            <td><?= h($qualificationDetails->graduation_percentage) ?></td>
                            <td><?= h($qualificationDetails->post_graduation_percentage) ?></td>
                            <td><?= h($qualificationDetails->other_percentage) ?></td>
                            <td><?= h($qualificationDetails->secondary_documents) ?></td>
                            <td><?= h($qualificationDetails->sr_secondary_documents) ?></td>
                            <td><?= h($qualificationDetails->graduation_documents) ?></td>
                            <td><?= h($qualificationDetails->post_graduation_documents) ?></td>
                            <td><?= h($qualificationDetails->other_documents) ?></td>
                            <td><?= h($qualificationDetails->created) ?></td>
                            <td><?= h($qualificationDetails->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'QualificationDetails', 'action' => 'view', $qualificationDetails->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'QualificationDetails', 'action' => 'edit', $qualificationDetails->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'QualificationDetails', 'action' => 'delete', $qualificationDetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $qualificationDetails->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
