<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<div class="clients form large-9 medium-8 columns content">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend><?= __('Add Client') ?></legend>
        <?php
            echo $this->Form->control('dni');
            echo $this->Form->control('name');
            echo $this->Form->control('surname');
            echo $this->Form->control('email');
            echo $this->Form->control('telephone');
            echo $this->Form->control('address');
            echo $this->Form->control('birthdate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
