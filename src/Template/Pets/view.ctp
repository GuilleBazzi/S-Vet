<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 */
?>

<div class="pets view large-9 medium-8 columns content">
    <h3><?= h($pet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($pet->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($pet->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Comment') ?></th>
            <td><?= h($pet->comment) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pet->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Client') ?></th>
            <td><?= $this->Number->format($pet->id_client) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Species') ?></th>
            <td><?= $this->Number->format($pet->id_species) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($pet->birthdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pet->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pet->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Aggressive') ?></th>
            <td><?= $pet->aggressive ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Vaccines') ?></h4>
        <?php if (!empty($pet->vaccines)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Dose') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pet->vaccines as $vaccines): ?>
            <tr>
                <td><?= h($vaccines->id) ?></td>
                <td><?= h($vaccines->name) ?></td>
                <td><?= h($vaccines->dose) ?></td>
                <td><?= h($vaccines->description) ?></td>
                <td><?= h($vaccines->created) ?></td>
                <td><?= h($vaccines->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Vaccines', 'action' => 'view', $vaccines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Vaccines', 'action' => 'edit', $vaccines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vaccines', 'action' => 'delete', $vaccines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vaccines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
