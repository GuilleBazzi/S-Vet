<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet[]|\Cake\Collection\CollectionInterface $pets
 */
?>

<div class="pets index large-9 medium-8 columns content">
    <h3><?= __('Mascotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Cliente') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Especie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
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
                <td><?= $this->Number->format($pet->id) ?></td>
                <td><?= $this->Number->format($pet->id_client) ?></td>
                <td><?= h($pet->species->name) ?></td>
                <td><?= h($pet->name) ?></td>
                <td><?= h($pet->birthdate) ?></td>
                <td><?= h($pet->gender) ?></td>
                <td><?= h($pet->comment) ?></td>
                <td><?= h($pet->aggressive ? __('Si') : __('No')) ?></td>
                <td class="actions">
                    <?= $this->Html->link(
                            $this->Html->tag('span','',array('class'=>'glyphicon glyphicon-eye-open')),
                            ['action' => 'view', $pet->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Html->link(
                            __('<span class="glyphicon glyphicon-pencil"></span>'),
                            ['action' => 'edit', $pet->id],
                            ['escape' => false]
                            )
                    ?>
                    <?= $this->Form->postLink(
                            __('<span class="glyphicon glyphicon-trash"></span>'),
                            ['action' => 'delete', $pet->id],
                            ['escape' => false],
                            ['confirm' => __('¿Está seguro que desea borrarlo? # {0}?', $pet->id)]
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
