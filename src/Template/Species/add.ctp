<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Species $species
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Species'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="species form large-9 medium-8 columns content">
    <?= $this->Form->create($species) ?>
    <fieldset>
        <legend><?= __('Add Species') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
