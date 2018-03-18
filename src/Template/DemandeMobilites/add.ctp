<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeMobilite $demandeMobilite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandeMobilites form large-9 medium-8 columns content">
    <?= $this->Form->create($demandeMobilite) ?>
    <fieldset>
        <legend><?= __('Add Demande Mobilite') ?></legend>
        <?php
            echo $this->Form->control('etudiant_id', ['options' => $etudiants]);
            echo $this->Form->control('diplome_id', ['options' => $diplomes]);
            echo $this->Form->control('date_depot', ['empty' => true]);
            echo $this->Form->control('etat');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
