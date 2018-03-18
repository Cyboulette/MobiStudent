<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant $etudiant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Etudiant'), ['action' => 'edit', $etudiant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Etudiant'), ['action' => 'delete', $etudiant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['controller' => 'DemandeMobilites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['controller' => 'DemandeMobilites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="etudiants view large-9 medium-8 columns content">
    <h3><?= h($etudiant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Diplome') ?></th>
            <td><?= $etudiant->has('diplome') ? $this->Html->link($etudiant->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $etudiant->diplome->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($etudiant->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prenom') ?></th>
            <td><?= h($etudiant->prenom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($etudiant->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cv') ?></th>
            <td><?= h($etudiant->cv) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($etudiant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Etudiant') ?></th>
            <td><?= $this->Number->format($etudiant->num_etudiant) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Demande Mobilites') ?></h4>
        <?php if (!empty($etudiant->demande_mobilites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Etudiant Id') ?></th>
                <th scope="col"><?= __('Diplome Id') ?></th>
                <th scope="col"><?= __('Date Depot') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($etudiant->demande_mobilites as $demandeMobilites): ?>
            <tr>
                <td><?= h($demandeMobilites->id) ?></td>
                <td><?= h($demandeMobilites->etudiant_id) ?></td>
                <td><?= h($demandeMobilites->diplome_id) ?></td>
                <td><?= h($demandeMobilites->date_depot) ?></td>
                <td><?= h($demandeMobilites->etat) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandeMobilites', 'action' => 'view', $demandeMobilites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandeMobilites', 'action' => 'edit', $demandeMobilites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandeMobilites', 'action' => 'delete', $demandeMobilites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeMobilites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
