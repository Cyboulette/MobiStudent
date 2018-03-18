<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant $etudiant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $etudiant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['controller' => 'DemandeMobilites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['controller' => 'DemandeMobilites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etudiants form large-9 medium-8 columns content">
    <?= $this->Form->create($etudiant) ?>
    <fieldset>
        <legend><?= __('Edit Etudiant') ?></legend>
        <?php
            echo $this->Form->control('diplome_id', ['options' => $diplomes]);
            echo $this->Form->control('num_etudiant');
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
            echo $this->Form->control('email');
            echo $this->Form->control('cv');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
