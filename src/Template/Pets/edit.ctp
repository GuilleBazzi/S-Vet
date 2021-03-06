<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pet $pet
 */
?>

<div class="pets form large-9 medium-8 columns content">
    <?= $this->Form->create($pet) ?>
    <fieldset>
        <legend><?= __('Edit Pet') ?></legend>
        <?php
            echo $this->Form->control('id_client', ['value'=>$id]);
            echo $this->Form->control('id_species');
            echo $this->Form->control('name');
            echo $this->Form->control('birthdate');
            if ($pet->gender ='M'){
                echo $this->Form->select(
                    'gender',
                    ['Macho', 'Hembra'],
                    [
                        'value' => ['Macho']
                    ]
                );
            } else {
                echo $this->Form->select(
                    'gender',
                    ['Macho', 'Hembra'],
                    [
                        'value' => ['Hembra']
                    ]
                );            }
            echo $this->Form->control('comment');
            echo $this->Form->control('aggressive');
            echo $this->Form->control('vaccines._ids', ['options' => $vaccines]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
