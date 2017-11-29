<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Species[]|\Cake\Collection\CollectionInterface $species
 */
$this->assign('title', 'Especies')
?>

<div class="species index large-9 medium-8 columns content">
    <h3><?= __('Especies') ?></h3>
    <?= $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
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
                    <?= $this->Html->link(
                            $this->Html->tag('span','',array('class'=>'glyphicon glyphicon-eye-open')),
                            ['action' => 'view', $species->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Html->link(
                            __('<span class="glyphicon glyphicon-pencil"></span>'),
                            ['action' => 'edit', $species->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Form->postLink(
                            __('<span class="glyphicon glyphicon-trash"></span>'),
                            ['action' => 'delete', $species->id],
                            ['escape' => false],
                            ['confirm' => __('¿Está seguro que desea borrarlo? # {0}?', $species->id)]
                            )
                    ?>
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
