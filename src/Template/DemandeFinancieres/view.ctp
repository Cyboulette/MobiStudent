<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeFinanciere $demandeFinanciere
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demande Financiere'), ['action' => 'edit', $demandeFinanciere->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demande Financiere'), ['action' => 'delete', $demandeFinanciere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeFinanciere->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demande Financieres'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Financiere'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demandeFinancieres view large-9 medium-8 columns content">
    <h3><?= h($demandeFinanciere->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Contrat') ?></th>
            <td><?= $demandeFinanciere->has('contrat') ? $this->Html->link($demandeFinanciere->contrat->id, ['controller' => 'Contrats', 'action' => 'view', $demandeFinanciere->contrat->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etat') ?></th>
            <td><?= h($demandeFinanciere->etat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demandeFinanciere->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Montant Accorde') ?></th>
            <td><?= $this->Number->format($demandeFinanciere->montant_accorde) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Depot') ?></th>
            <td><?= h($demandeFinanciere->date_depot) ?></td>
        </tr>
    </table>
</div>
