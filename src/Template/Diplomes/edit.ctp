<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diplome $diplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $diplome->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $diplome->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Universites'), ['controller' => 'Universites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Universite'), ['controller' => 'Universites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['controller' => 'DemandeMobilites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['controller' => 'DemandeMobilites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="diplomes form large-9 medium-8 columns content">
    <?= $this->Form->create($diplome) ?>
    <fieldset>
        <legend><?= __('Edit Diplome') ?></legend>
        <?php
            echo $this->Form->control('universite_id', ['options' => $universites]);
            echo $this->Form->control('intitule');
            echo $this->Form->control('adresse_web');
            echo $this->Form->control('niveau');
            echo $this->Form->control('cours._ids', ['options' => $cours]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
