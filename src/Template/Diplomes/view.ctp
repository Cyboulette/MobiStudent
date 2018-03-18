<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diplome $diplome
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Diplome'), ['action' => 'edit', $diplome->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Diplome'), ['action' => 'delete', $diplome->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diplome->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Diplomes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diplome'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Universites'), ['controller' => 'Universites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Universite'), ['controller' => 'Universites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Demande Mobilites'), ['controller' => 'DemandeMobilites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Demande Mobilite'), ['controller' => 'DemandeMobilites', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Etudiants'), ['controller' => 'Etudiants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Etudiant'), ['controller' => 'Etudiants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="diplomes view large-9 medium-8 columns content">
    <h3><?= h($diplome->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Universite') ?></th>
            <td><?= $diplome->has('universite') ? $this->Html->link($diplome->universite->id, ['controller' => 'Universites', 'action' => 'view', $diplome->universite->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Intitule') ?></th>
            <td><?= h($diplome->intitule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse Web') ?></th>
            <td><?= h($diplome->adresse_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($diplome->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Niveau') ?></th>
            <td><?= $this->Number->format($diplome->niveau) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Cours') ?></h4>
        <?php if (!empty($diplome->cours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Libelle') ?></th>
                <th scope="col"><?= __('Nb Ects') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($diplome->cours as $cours): ?>
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
        <h4><?= __('Related Contrats') ?></h4>
        <?php if (!empty($diplome->contrats)): ?>
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
            <?php foreach ($diplome->contrats as $contrats): ?>
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
    <div class="related">
        <h4><?= __('Related Demande Mobilites') ?></h4>
        <?php if (!empty($diplome->demande_mobilites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Etudiant Id') ?></th>
                <th scope="col"><?= __('Diplome Id') ?></th>
                <th scope="col"><?= __('Date Depot') ?></th>
                <th scope="col"><?= __('Etat') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($diplome->demande_mobilites as $demandeMobilites): ?>
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
    <div class="related">
        <h4><?= __('Related Etudiants') ?></h4>
        <?php if (!empty($diplome->etudiants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Diplome Id') ?></th>
                <th scope="col"><?= __('Num Etudiant') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Prenom') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Cv') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($diplome->etudiants as $etudiants): ?>
            <tr>
                <td><?= h($etudiants->id) ?></td>
                <td><?= h($etudiants->diplome_id) ?></td>
                <td><?= h($etudiants->num_etudiant) ?></td>
                <td><?= h($etudiants->nom) ?></td>
                <td><?= h($etudiants->prenom) ?></td>
                <td><?= h($etudiants->email) ?></td>
                <td><?= h($etudiants->cv) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Etudiants', 'action' => 'view', $etudiants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Etudiants', 'action' => 'edit', $etudiants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Etudiants', 'action' => 'delete', $etudiants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $etudiants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
