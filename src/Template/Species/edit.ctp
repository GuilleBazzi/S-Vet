<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Species $species
 */
?>

<div class="species form large-9 medium-8 columns content">
    <?= $this->Form->create($species) ?>
    <fieldset>
        <legend><?= __('Edit Species') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
