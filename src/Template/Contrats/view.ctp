<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrat $contrat
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contrat'), ['action' => 'edit', $contrat->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contrat'), ['action' => 'delete', $contrat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrat->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contrats'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrat'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['controller' => 'DemandeMobilites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['controller' => 'DemandeMobilites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demande Financieres'), ['controller' => 'DemandeFinancieres', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Financiere'), ['controller' => 'DemandeFinancieres', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contrats view large-9 medium-8 columns content">
    <h3><?= h($contrat->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Diplome') ?></th>
            <td><?= $contrat->has('diplome') ? $this->Html->link($contrat->diplome->id, ['controller' => 'Diplomes', 'action' => 'view', $contrat->diplome->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Demande Mobilite') ?></th>
            <td><?= $contrat->has('demande_mobilite') ? $this->Html->link($contrat->demande_mobilite->id, ['controller' => 'DemandeMobilites', 'action' => 'view', $contrat->demande_mobilite->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Programme') ?></th>
            <td><?= $contrat->has('programme') ? $this->Html->link($contrat->programme->id, ['controller' => 'Programmes', 'action' => 'view', $contrat->programme->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Etat') ?></th>
            <td><?= h($contrat->etat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ordre') ?></th>
            <td><?= h($contrat->ordre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contrat->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duree') ?></th>
            <td><?= $this->Number->format($contrat->duree) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cours') ?></h4>
        <?php if (!empty($contrat->cours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Libelle') ?></th>
                <th scope="col"><?= __('Nb Ects') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contrat->cours as $cours): ?>
            <tr>
                <td><?= h($cours->id) ?></td>
                <td><?= h($cours->libelle) ?></td>
                <td><?= h($cours->nb_ects) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cours', 'action' => 'view', $cours->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cours', 'action' => 'edit', $cours->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cours', 'action' => 'delete', $cours->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cours->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Demande Financieres') ?></h4>
        <?php if (!empty($contrat->demande_financieres)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Contrat Id') ?></th>
                <th scope="col"><?= __('Date Depot') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col"><?= __('Montant Accorde') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contrat->demande_financieres as $demandeFinancieres): ?>
            <tr>
                <td><?= h($demandeFinancieres->id) ?></td>
                <td><?= h($demandeFinancieres->contrat_id) ?></td>
                <td><?= h($demandeFinancieres->date_depot) ?></td>
                <td><?= h($demandeFinancieres->etat) ?></td>
                <td><?= h($demandeFinancieres->montant_accorde) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DemandeFinancieres', 'action' => 'view', $demandeFinancieres->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DemandeFinancieres', 'action' => 'edit', $demandeFinancieres->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DemandeFinancieres', 'action' => 'delete', $demandeFinancieres->id], ['confirm' => __('Are you sure you want to delete # {0}?', $demandeFinancieres->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
