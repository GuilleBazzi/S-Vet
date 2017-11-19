<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PetsVaccine $petsVaccine
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $petsVaccine->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $petsVaccine->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Pets Vaccines'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="petsVaccines form large-9 medium-8 columns content">
    <?= $this->Form->create($petsVaccine) ?>
    <fieldset>
        <legend><?= __('Edit Pets Vaccine') ?></legend>
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
