<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($client->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($client->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($client->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dni') ?></th>
            <td><?= $this->Number->format($client->dni) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($client->birthdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($client->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($client->modified) ?></td>
        </tr>
    </table>
</div>

<!--Aquí van las mascotas-->
<div class="pets index large-9 medium-8 columns content">
    <h3><?= __('Mascotas') ?></h3>
    <?= $this->Html->link(__('Nueva'), ['controller' => 'Pets', 'action' => 'add', $client->id], ['class' => 'btn btn-primary']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Especie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('F. Nac') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Genero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Comentario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('¿Agresivo?') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pets as $pet): ?>
            <tr>
                <td><?= h($pet->name) ?></td>
                <td><?= h($pet->species->name) ?></td>
                <td><?= h($pet->birthdate) ?></td>
                <td><?= h($pet->gender) ?></td>
                <td><?= h($pet->comment) ?></td>
                <td><?= h($pet->aggressive ? __('Si') : __('No')) ?></td>

                <td class="actions">
                    <?= $this->Html->link(
                            $this->Html->tag('span','',array('class'=>'glyphicon glyphicon-eye-open')),
                            ['controller' => 'Pets', 'action' => 'view', $pet->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Html->link(
                            __('<span class="glyphicon glyphicon-pencil"></span>'),
                            ['controller' => 'Pets', 'action' => 'edit', $pet->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Form->postLink(
                            __('<span class="glyphicon glyphicon-trash"></span>'),
                            ['controller' => 'Pets', 'action' => 'view', $pet->id],
                            ['escape' => false],
                            ['controller' => 'Pets', 'action' => 'delete', $pet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pet->id)]
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
