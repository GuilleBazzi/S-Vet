<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
$this->assign('title', 'Usuarios')
?>

<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col" width="5%"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col" width="32%"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col" width="23%"><?= $this->Paginator->sort('Usuario') ?></th>
                <th scope="col" width="20%"><?= $this->Paginator->sort('Creado') ?></th>
                <th scope="col" width="10%"><?= $this->Paginator->sort('Admin') ?></th>
                <th scope="col" width="10%"class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->user_name) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->supervisor ? __('Si') : __('No')) ?></td>
                <td class="actions">
                    <?= $this->Html->link(
                            $this->Html->tag('span','',array('class'=>'glyphicon glyphicon-eye-open')),
                            ['action' => 'view', $user->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Html->link(
                            __('<span class="glyphicon glyphicon-pencil"></span>'),
                            ['action' => 'edit', $user->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Form->postLink(
                            __('<span class="glyphicon glyphicon-trash"></span>'),
                            ['action' => 'delete', $user->id],
                            ['escape' => false],
                            ['confirm' => __('¿Está seguro que desea borrarlo? # {0}?', $user->id)]
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
