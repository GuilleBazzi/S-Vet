<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 */
?>

<div class="pets form large-9 medium-8 columns content">
    <?= $this->Form->create($pet) ?>
    <fieldset>
        <legend><?= __('Add Pet') ?></legend>
        <?php
            echo $this->Form->hidden('id_client', ['value'=>$id_client]);
            echo $this->Form->control('id_species');
            echo $this->Form->control('name');
            echo $this->Form->control('birthdate');
            echo $this->Form->control('gender', ['options' => ['Macho', 'Hembra']]);
            echo $this->Form->control('comment');
            echo $this->Form->control('aggressive');
            echo $this->Form->control('vaccines._ids', ['options' => $vaccines]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
