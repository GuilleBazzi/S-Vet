<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Clientes'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Mascotas'), ['controller' => 'Pets', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Vacunas'), ['controller' => 'Vaccines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Vacunas por Mascota'), ['controller' => 'PetVaccines', 'action' => 'index']) ?></li>
    </ul>
</nav>