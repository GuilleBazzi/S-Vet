<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CareRecord $careRecord
 */
?>

<div class="careRecords view large-9 medium-8 columns content">
    <h3><?= h($careRecord->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($careRecord->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($careRecord->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pet') ?></th>
            <td><?= $this->Number->format($careRecord->id_pet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($careRecord->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($careRecord->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($careRecord->modified) ?></td>
        </tr>
    </table>
</div>
