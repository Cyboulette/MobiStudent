<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeMobilite[]|\Cake\Collection\CollectionInterface $demandeMobilites
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="demandeMobilites index large-9 medium-8 columns content">
    <h3><?= __('Demande Mobilites') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etudiant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diplome_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_depot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($demandeMobilites as $demandeMobilite): ?>
            <tr>
                <td><?= $this->Number->format($demandeMobilite->id) ?></td>
                <td><?= $demandeMobilite->has('etudiant') ? $this->Html->link($demandeMobilite->etudiant->id, ['controller' => 'Etudiants', 'action' => 'view', $demandeMobilite->etudiant->id]) : '' ?></td>
                <td><?= $demandeMobilite->has('diplome') ? $this->Html->link($demandeMobilite->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $demandeMobilite->diplome->id]) : '' ?></td>
                <td><?= h($demandeMobilite->date_depot) ?></td>
                <td><?= h($demandeMobilite->etat) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $demandeMobilite->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $demandeMobilite->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $demandeMobilite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeMobilite->id)]) ?>
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
