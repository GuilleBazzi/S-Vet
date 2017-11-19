<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccine $vaccine
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vaccines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Pets'), ['controller' => 'Pets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pet'), ['controller' => 'Pets', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vaccines form large-9 medium-8 columns content">
    <?= $this->Form->create($vaccine) ?>
    <fieldset>
        <legend><?= __('Add Vaccine') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('dose');
            echo $this->Form->control('description');
            echo $this->Form->control('pets._ids', ['options' => $pets]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
