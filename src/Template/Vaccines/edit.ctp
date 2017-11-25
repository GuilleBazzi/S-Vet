<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaccine $vaccine
 */
?>

<div class="vaccines form large-9 medium-8 columns content">
    <?= $this->Form->create($vaccine) ?>
    <fieldset>
        <legend><?= __('Edit Vaccine') ?></legend>
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
