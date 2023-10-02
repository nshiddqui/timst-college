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
                    <th><?= __('User') ?></th>
                    <td><?= $student->has('user') ? $this->Html->link($student->user->id, ['controller' => 'Users', 'action' => 'view', $student->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($student->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enrolment No') ?></th>
                    <td><?= h($student->enrolment_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Applicant Name') ?></th>
                    <td><?= h($student->applicant_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Father Name') ?></th>
                    <td><?= h($student->father_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($student->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= $student->has('state') ? $this->Html->link($student->state->name, ['controller' => 'States', 'action' => 'view', $student->state->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Contact') ?></th>
                    <td><?= h($student->contact) ?></td>
                </tr>
                <tr>
                    <th><?= __('Gender') ?></th>
                    <td><?= $student->has('gender') ? $this->Html->link($student->gender->name, ['controller' => 'Genders', 'action' => 'view', $student->gender->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('University') ?></th>
                    <td><?= $student->has('university') ? $this->Html->link($student->university->name, ['controller' => 'Universities', 'action' => 'view', $student->university->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Cource') ?></th>
                    <td><?= $student->has('cource') ? $this->Html->link($student->cource->name, ['controller' => 'Cources', 'action' => 'view', $student->cource->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Reference') ?></th>
                    <td><?= h($student->reference) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($student->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cource Fees') ?></th>
                    <td><?= $this->Number->format($student->cource_fees) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category Id') ?></th>
                    <td><?= $this->Number->format($student->category_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Of Birth') ?></th>
                    <td><?= h($student->date_of_birth) ?></td>
                </tr>
                <tr>
                    <th><?= __('Addmission Date') ?></th>
                    <td><?= h($student->addmission_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($student->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($student->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
