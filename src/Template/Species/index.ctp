<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Species[]|\Cake\Collection\CollectionInterface $species
 */
?>
<?= $this->element('SideMenus/side_menu_logged_on') ?>

<div class="species index large-9 medium-8 columns content">
    <h3><?= __('Especies') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive">
        <thead>
            <tr>
                <!--<th scope="col"><?= $this->Paginator->sort('id') ?></th>-->
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($species as $species): ?>
            <tr>
                <!--<td><?= $this->Number->format($species->id) ?></td>-->
                <td><?= h($species->name) ?></td>
                <td><?= h($species->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $species->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $species->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $species->id], ['confirm' => __('Are you sure you want to delete # {0}?', $species->id)]) ?>
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
