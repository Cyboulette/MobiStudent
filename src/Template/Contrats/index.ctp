<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrat[]|\Cake\Collection\CollectionInterface $contrats
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['action' => 'add']) ?></li>
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
<div class="contrats index large-9 medium-8 columns content">
    <h3><?= __('Contrats') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diplome_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demande_mobilite_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programme_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duree') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrats as $contrat): ?>
            <tr>
                <td><?= $this->Number->format($contrat->id) ?></td>
                <td><?= $contrat->has('diplome') ? $this->Html->link($contrat->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $contrat->diplome->id]) : '' ?></td>
                <td><?= $contrat->has('demande_mobilite') ? $this->Html->link($contrat->demande_mobilite->id, ['controller' => 'DemandeMobilites', 'action' => 'view', $contrat->demande_mobilite->id]) : '' ?></td>
                <td><?= $contrat->has('programme') ? $this->Html->link($contrat->programme->id, ['controller' => 'Programmes', 'action' => 'view', $contrat->programme->id]) : '' ?></td>
                <td><?= $this->Number->format($contrat->duree) ?></td>
                <td><?= h($contrat->etat) ?></td>
                <td><?= h($contrat->ordre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contrat->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contrat->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contrat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrat->id)]) ?>
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
