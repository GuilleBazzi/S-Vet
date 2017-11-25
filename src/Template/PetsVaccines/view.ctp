<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PetsVaccine $petsVaccine
 */
?>

<div class="petsVaccines view large-9 medium-8 columns content">
    <h3><?= h($petsVaccine->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($petsVaccine->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Pet') ?></th>
            <td><?= $this->Number->format($petsVaccine->id_pet) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Vaccine') ?></th>
            <td><?= $this->Number->format($petsVaccine->id_vaccine) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($petsVaccine->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiration Date') ?></th>
            <td><?= h($petsVaccine->expiration_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($petsVaccine->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($petsVaccine->modified) ?></td>
        </tr>
    </table>
</div>
