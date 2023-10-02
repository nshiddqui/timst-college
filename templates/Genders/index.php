<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Gender> $genders
 */
?>
<div class="genders index content">
    <?= $this->Html->link(__('New Gender'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Genders') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($genders as $gender): ?>
                <tr>
                    <td><?= $this->Number->format($gender->id) ?></td>
                    <td><?= h($gender->name) ?></td>
                    <td><?= h($gender->created) ?></td>
                    <td><?= h($gender->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gender->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gender->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gender->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gender->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
