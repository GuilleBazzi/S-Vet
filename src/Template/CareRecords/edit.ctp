<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CareRecord $careRecord
 */
?>

<div class="careRecords form large-9 medium-8 columns content">
    <?= $this->Form->create($careRecord) ?>
    <fieldset>
        <legend><?= __('Edit Care Record') ?></legend>
        <?php
            echo $this->Form->control('id_pet');
            echo $this->Form->control('date');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
