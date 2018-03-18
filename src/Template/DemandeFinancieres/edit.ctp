<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeFinanciere $demandeFinanciere
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $demandeFinanciere->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $demandeFinanciere->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Demande Financieres'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandeFinancieres form large-9 medium-8 columns content">
    <?= $this->Form->create($demandeFinanciere) ?>
    <fieldset>
        <legend><?= __('Edit Demande Financiere') ?></legend>
        <?php
            echo $this->Form->control('contrat_id', ['options' => $contrats]);
            echo $this->Form->control('date_depot', ['empty' => true]);
            echo $this->Form->control('etat');
            echo $this->Form->control('montant_accorde');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
