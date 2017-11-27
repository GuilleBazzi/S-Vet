<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deceased $deceased
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deceased'), ['action' => 'edit', $deceased->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deceased'), ['action' => 'delete', $deceased->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deceased->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Deceaseds'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deceased'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deceaseds view large-9 medium-8 columns content">
    <h3><?= h($deceased->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cause') ?></th>
            <td><?= h($deceased->cause) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($deceased->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pet') ?></th>
            <td><?= $this->Number->format($deceased->id_pet) ?></td>
        </tr>
    </table>
</div>
