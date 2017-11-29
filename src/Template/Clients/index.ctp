<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
$this->assign('title', 'Clientes')
?>

<div class="clients index large-9 medium-8 columns content">
    <h3><?= __('Clientes') ?></h3>
    <?= $this->Html->link(__('Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
    <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dni') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Telefono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dirección') ?></th>
                <th scope="col"><?= $this->Paginator->sort('F. Nac.') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Creado') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
            <tr>
                <td><?= $this->Number->format($client->id) ?></td>
                <td><?= $this->Number->format($client->dni) ?></td>
                <td><?= h($client->name) ?></td>
                <td><?= h($client->surname) ?></td>
                <td><?= h($client->email) ?></td>
                <td><?= h($client->telephone) ?></td>
                <td><?= h($client->address) ?></td>
                <td><?= h($client->birthdate) ?></td>
                <td><?= h($client->created) ?></td>
<!--                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
                </td>-->
                <td class="actions">
                    <?= $this->Html->link(
                            $this->Html->tag('span','',array('class'=>'glyphicon glyphicon-eye-open')),
                            ['action' => 'view', $client->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Html->link(
                            __('<span class="glyphicon glyphicon-pencil"></span>'),
                            ['action' => 'edit', $client->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Form->postLink(
                            __('<span class="glyphicon glyphicon-trash"></span>'),
                            ['action' => 'delete', $client->id],
                            ['escape' => false],
                            ['confirm' => __('¿Está seguro que desea borrarlo? # {0}?', $client->id)]
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