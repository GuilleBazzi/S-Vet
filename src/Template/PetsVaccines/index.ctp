<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PetsVaccine[]|\Cake\Collection\CollectionInterface $petsVaccines
 */
?>

<div class="petsVaccines index large-9 medium-8 columns content">
    <h3><?= __('Pets Vaccines') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_pet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_vaccine') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expiration_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($petsVaccines as $petsVaccine): ?>
            <tr>
                <td><?= $this->Number->format($petsVaccine->id) ?></td>
                <td><?= $this->Number->format($petsVaccine->id_pet) ?></td>
                <td><?= $this->Number->format($petsVaccine->id_vaccine) ?></td>
                <td><?= h($petsVaccine->date) ?></td>
                <td><?= h($petsVaccine->expiration_date) ?></td>
                <td><?= h($petsVaccine->created) ?></td>
                <td><?= h($petsVaccine->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $petsVaccine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $petsVaccine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $petsVaccine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $petsVaccine->id)]) ?>
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
