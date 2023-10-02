<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\State $state
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List States'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New State'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="states view content">
            <h3><?= h($state->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($state->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($state->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($state->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($state->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Students') ?></h4>
                <?php if (!empty($state->students)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Enrolment No') ?></th>
                            <th><?= __('Applicant Name') ?></th>
                            <th><?= __('Father Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('State Id') ?></th>
                            <th><?= __('Contact') ?></th>
                            <th><?= __('Date Of Birth') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('University Id') ?></th>
                            <th><?= __('Cource Id') ?></th>
                            <th><?= __('Cource Fees') ?></th>
                            <th><?= __('Addmission Date') ?></th>
                            <th><?= __('Category Id') ?></th>
                            <th><?= __('Reference') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($state->students as $students) : ?>
                        <tr>
                            <td><?= h($students->id) ?></td>
                            <td><?= h($students->user_id) ?></td>
                            <td><?= h($students->image) ?></td>
                            <td><?= h($students->enrolment_no) ?></td>
                            <td><?= h($students->applicant_name) ?></td>
                            <td><?= h($students->father_name) ?></td>
                            <td><?= h($students->address) ?></td>
                            <td><?= h($students->state_id) ?></td>
                            <td><?= h($students->contact) ?></td>
                            <td><?= h($students->date_of_birth) ?></td>
                            <td><?= h($students->gender) ?></td>
                            <td><?= h($students->university_id) ?></td>
                            <td><?= h($students->cource_id) ?></td>
                            <td><?= h($students->cource_fees) ?></td>
                            <td><?= h($students->addmission_date) ?></td>
                            <td><?= h($students->category_id) ?></td>
                            <td><?= h($students->reference) ?></td>
                            <td><?= h($students->created) ?></td>
                            <td><?= h($students->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Universities') ?></h4>
                <?php if (!empty($state->universities)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Address') ?></th>
                            <th><?= __('State Id') ?></th>
                            <th><?= __('Contact') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($state->universities as $universities) : ?>
                        <tr>
                            <td><?= h($universities->id) ?></td>
                            <td><?= h($universities->name) ?></td>
                            <td><?= h($universities->address) ?></td>
                            <td><?= h($universities->state_id) ?></td>
                            <td><?= h($universities->contact) ?></td>
                            <td><?= h($universities->created) ?></td>
                            <td><?= h($universities->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Universities', 'action' => 'view', $universities->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Universities', 'action' => 'edit', $universities->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Universities', 'action' => 'delete', $universities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universities->id)]) ?>
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
