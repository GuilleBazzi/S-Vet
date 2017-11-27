<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deceased[]|\Cake\Collection\CollectionInterface $deceaseds
 */
?>

<div class="deceaseds index large-9 medium-8 columns content">
    <h3><?= __('Deceaseds') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_pet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cause') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deceaseds as $deceased): ?>
            <tr>
                <td><?= $this->Number->format($deceased->id) ?></td>
                <td><?= $this->Number->format($deceased->id_pet) ?></td>
                <td><?= h($deceased->cause) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $deceased->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deceased->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deceased->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deceased->id)]) ?>
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
