<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccine[]|\Cake\Collection\CollectionInterface $vaccines
 */
?>

<div class="vaccines index large-9 medium-8 columns content">
    <h3><?= __('Vaccines') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dosis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descripción') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vaccines as $vaccine): ?>
            <tr>
                <!--<td><?= $this->Number->format($vaccine->id) ?></td>-->
                <td><?= h($vaccine->name) ?></td>
                <td><?= h($vaccine->dose) ?></td>
                <td><?= h($vaccine->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vaccine->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vaccine->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vaccine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccine->id)]) ?>
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
