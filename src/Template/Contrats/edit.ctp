<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrat $contrat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contrat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contrat->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['controller' => 'DemandeMobilites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['controller' => 'DemandeMobilites', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demande Financieres'), ['controller' => 'DemandeFinancieres', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande Financiere'), ['controller' => 'DemandeFinancieres', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contrats form large-9 medium-8 columns content">
    <?= $this->Form->create($contrat) ?>
    <fieldset>
        <legend><?= __('Edit Contrat') ?></legend>
        <?php
            echo $this->Form->control('diplome_id', ['options' => $diplomes]);
            echo $this->Form->control('demande_mobilite_id', ['options' => $demandeMobilites]);
            echo $this->Form->control('programme_id', ['options' => $programmes, 'empty' => true]);
            echo $this->Form->control('duree');
            echo $this->Form->control('etat');
            echo $this->Form->control('ordre');
            echo $this->Form->control('cours._ids', ['options' => $cours]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
