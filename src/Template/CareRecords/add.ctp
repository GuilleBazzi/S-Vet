<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CareRecord $careRecord
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Care Records'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="careRecords form large-9 medium-8 columns content">
    <?= $this->Form->create($careRecord) ?>
    <fieldset>
        <legend><?= __('Add Care Record') ?></legend>
        <?php
            echo $this->Form->control('id_pet');
            echo $this->Form->control('date');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
