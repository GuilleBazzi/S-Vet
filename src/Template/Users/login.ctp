<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Inicio de Sesión') ?></legend>
        <?php
            echo $this->Form->control('user_name');
            echo $this->Form->control('password');
//          EJEMPLO DE UN INPUT CON CLASES DE BOOTSTRAP
//          echo $this->Form->control('password', ['class' => 'btn btn-primary']), ;
        ?>
    </fieldset>
    <?= $this->Form->button(__('Iniciar')) ?>
    <?= $this->Form->end() ?>
</div>