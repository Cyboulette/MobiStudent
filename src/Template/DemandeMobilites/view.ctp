<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DemandeMobilite $demandeMobilite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Demande Mobilite'), ['action' => 'edit', $demandeMobilite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Demande Mobilite'), ['action' => 'delete', $demandeMobilite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeMobilite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="demandeMobilites view large-9 medium-8 columns content">
    <h3><?= h($demandeMobilite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Etudiant') ?></th>
            <td><?= $demandeMobilite->has('etudiant') ? $this->Html->link($demandeMobilite->etudiant->id, ['controller' => 'Etudiants', 'action' => 'view', $demandeMobilite->etudiant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Diplome') ?></th>
            <td><?= $demandeMobilite->has('diplome') ? $this->Html->link($demandeMobilite->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $demandeMobilite->diplome->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etat') ?></th>
            <td><?= h($demandeMobilite->etat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($demandeMobilite->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Depot') ?></th>
            <td><?= h($demandeMobilite->date_depot) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contrats') ?></h4>
        <?php if (!empty($demandeMobilite->contrats)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Diplome Id') ?></th>
                <th scope="col"><?= __('Demande Mobilite Id') ?></th>
                <th scope="col"><?= __('Programme Id') ?></th>
                <th scope="col"><?= __('Duree') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col"><?= __('Ordre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($demandeMobilite->contrats as $contrats): ?>
            <tr>
                <td><?= h($contrats->id) ?></td>
                <td><?= h($contrats->diplome_id) ?></td>
                <td><?= h($contrats->demande_mobilite_id) ?></td>
                <td><?= h($contrats->programme_id) ?></td>
                <td><?= h($contrats->duree) ?></td>
                <td><?= h($contrats->etat) ?></td>
                <td><?= h($contrats->ordre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contrats', 'action' => 'view', $contrats->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contrats', 'action' => 'edit', $contrats->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contrats', 'action' => 'delete', $contrats->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrats->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
