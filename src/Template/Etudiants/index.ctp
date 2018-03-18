<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant[]|\Cake\Collection\CollectionInterface $etudiants
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['controller' => 'DemandeMobilites', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['controller' => 'DemandeMobilites', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="etudiants index large-9 medium-8 columns content">
    <h3><?= __('Etudiants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diplome_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_etudiant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cv') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= $this->Number->format($etudiant->id) ?></td>
                <td><?= $etudiant->has('diplome') ? $this->Html->link($etudiant->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $etudiant->diplome->id]) : '' ?></td>
                <td><?= $this->Number->format($etudiant->num_etudiant) ?></td>
                <td><?= h($etudiant->nom) ?></td>
                <td><?= h($etudiant->prenom) ?></td>
                <td><?= h($etudiant->email) ?></td>
                <td><?= h($etudiant->cv) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $etudiant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $etudiant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $etudiant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->id)]) ?>
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
