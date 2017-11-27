<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deceased $deceased
 */
?>

<div class="deceaseds form large-9 medium-8 columns content">
    <?= $this->Form->create($deceased) ?>
    <fieldset>
        <legend><?= __('Add Deceased') ?></legend>
        <?php
            echo $this->Form->control('id_pet');
            echo $this->Form->control('cause');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
