<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CareRecord[]|\Cake\Collection\CollectionInterface $careRecords
 */
?>

<div class="careRecords index large-9 medium-8 columns content">
    <h3><?= __('Care Records') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_pet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($careRecords as $careRecord): ?>
            <tr>
                <td><?= $this->Number->format($careRecord->id) ?></td>
                <td><?= $this->Number->format($careRecord->id_pet) ?></td>
                <td><?= h($careRecord->date) ?></td>
                <td><?= h($careRecord->description) ?></td>
                <td><?= h($careRecord->created) ?></td>
                <td><?= h($careRecord->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $careRecord->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $careRecord->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $careRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $careRecord->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
