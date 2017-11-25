<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PetsVaccine $petsVaccine
 */
?>

<div class="petsVaccines form large-9 medium-8 columns content">
    <?= $this->Form->create($petsVaccine) ?>
    <fieldset>
        <legend><?= __('Add Pets Vaccine') ?></legend>
        <?php
            echo $this->Form->control('id_pet');
            echo $this->Form->control('id_vaccine');
            echo $this->Form->control('date');
            echo $this->Form->control('expiration_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
