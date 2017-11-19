<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vaccines'), ['controller' => 'Vaccines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vaccine'), ['controller' => 'Vaccines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pets form large-9 medium-8 columns content">
    <?= $this->Form->create($pet) ?>
    <fieldset>
        <legend><?= __('Add Pet') ?></legend>
        <?php
            echo $this->Form->control('id_client');
            echo $this->Form->control('id_species');
            echo $this->Form->control('birthdate');
            echo $this->Form->control('gender');
            echo $this->Form->control('comment');
            echo $this->Form->control('aggressive');
            echo $this->Form->control('vaccines._ids', ['options' => $vaccines]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
