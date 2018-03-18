<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeFinanciere[]|\Cake\Collection\CollectionInterface $demandeFinancieres
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demande Financiere'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandeFinancieres index large-9 medium-8 columns content">
    <h3><?= __('Demande Financieres') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contrat_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_depot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('montant_accorde') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandeFinancieres as $demandeFinanciere): ?>
            <tr>
                <td><?= $this->Number->format($demandeFinanciere->id) ?></td>
                <td><?= $demandeFinanciere->has('contrat') ? $this->Html->link($demandeFinanciere->contrat->id, ['controller' => 'Contrats', 'action' => 'view', $demandeFinanciere->contrat->id]) : '' ?></td>
                <td><?= h($demandeFinanciere->date_depot) ?></td>
                <td><?= h($demandeFinanciere->etat) ?></td>
                <td><?= $this->Number->format($demandeFinanciere->montant_accorde) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demandeFinanciere->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demandeFinanciere->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demandeFinanciere->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeFinanciere->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
