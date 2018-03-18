<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diplome[]|\Cake\Collection\CollectionInterface $diplomes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Diplome'), ['action' => 'add']) ?></li>
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
<div class="diplomes index large-9 medium-8 columns content">
    <h3><?= __('Diplomes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('universite_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('intitule') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse_web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('niveau') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diplomes as $diplome): ?>
            <tr>
                <td><?= $this->Number->format($diplome->id) ?></td>
                <td><?= $diplome->has('universite') ? $this->Html->link($diplome->universite->id, ['controller' => 'Universites', 'action' => 'view', $diplome->universite->id]) : '' ?></td>
                <td><?= h($diplome->intitule) ?></td>
                <td><?= h($diplome->adresse_web) ?></td>
                <td><?= $this->Number->format($diplome->niveau) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $diplome->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diplome->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diplome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diplome->id)]) ?>
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
