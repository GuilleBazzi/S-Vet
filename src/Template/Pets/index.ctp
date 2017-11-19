<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet[]|\Cake\Collection\CollectionInterface $pets
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vaccines'), ['controller' => 'Vaccines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaccine'), ['controller' => 'Vaccines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pets index large-9 medium-8 columns content">
    <h3><?= __('Pets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_client') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_species') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('comment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aggressive') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet): ?>
            <tr>
                <td><?= $this->Number->format($pet->id) ?></td>
                <td><?= $this->Number->format($pet->id_client) ?></td>
                <td><?= $this->Number->format($pet->id_species) ?></td>
                <td><?= h($pet->birthdate) ?></td>
                <td><?= h($pet->gender) ?></td>
                <td><?= h($pet->comment) ?></td>
                <td><?= h($pet->aggressive) ?></td>
                <td><?= h($pet->created) ?></td>
                <td><?= h($pet->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id)]) ?>
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
