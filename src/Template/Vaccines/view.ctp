<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccine $vaccine
 */
?>

<div class="vaccines view large-9 medium-8 columns content">
    <h3><?= h($vaccine->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($vaccine->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dose') ?></th>
            <td><?= h($vaccine->dose) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($vaccine->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vaccine->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vaccine->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vaccine->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Pets') ?></h4>
        <?php if (!empty($vaccine->pets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Id Client') ?></th>
                <th scope="col"><?= __('Id Species') ?></th>
                <th scope="col"><?= __('Birthdate') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Aggressive') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vaccine->pets as $pets): ?>
            <tr>
                <td><?= h($pets->id) ?></td>
                <td><?= h($pets->id_client) ?></td>
                <td><?= h($pets->id_species) ?></td>
                <td><?= h($pets->birthdate) ?></td>
                <td><?= h($pets->gender) ?></td>
                <td><?= h($pets->comment) ?></td>
                <td><?= h($pets->aggressive) ?></td>
                <td><?= h($pets->created) ?></td>
                <td><?= h($pets->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Pets', 'action' => 'view', $pets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Pets', 'action' => 'edit', $pets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Pets', 'action' => 'delete', $pets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
