<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programme $programme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Programme'), ['action' => 'edit', $programme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Programme'), ['action' => 'delete', $programme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Programmes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Universites'), ['controller' => 'Universites', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Universite'), ['controller' => 'Universites', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="programmes view large-9 medium-8 columns content">
    <h3><?= h($programme->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Intitule') ?></th>
            <td><?= h($programme->intitule) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($programme->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Explication') ?></h4>
        <?= $this->Text->autoParagraph(h($programme->explication)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Universites') ?></h4>
        <?php if (!empty($programme->universites)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nom') ?></th>
                <th scope="col"><?= __('Adresse Postale') ?></th>
                <th scope="col"><?= __('Adresse Web') ?></th>
                <th scope="col"><?= __('Adresse Mail') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($programme->universites as $universites): ?>
            <tr>
                <td><?= h($universites->id) ?></td>
                <td><?= h($universites->nom) ?></td>
                <td><?= h($universites->adresse_postale) ?></td>
                <td><?= h($universites->adresse_web) ?></td>
                <td><?= h($universites->adresse_mail) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Universites', 'action' => 'view', $universites->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Universites', 'action' => 'edit', $universites->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Universites', 'action' => 'delete', $universites->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universites->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contrats') ?></h4>
        <?php if (!empty($programme->contrats)): ?>
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
            <?php foreach ($programme->contrats as $contrats): ?>
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
