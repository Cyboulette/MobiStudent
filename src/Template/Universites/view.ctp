<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Universite $universite
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Universite'), ['action' => 'edit', $universite->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Universite'), ['action' => 'delete', $universite->id], ['confirm' => __('Are you sure you want to delete # {0}?', $universite->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Universites'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Universite'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programmes'), ['controller' => 'Programmes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programme'), ['controller' => 'Programmes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="universites view large-9 medium-8 columns content">
    <h3><?= h($universite->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nom') ?></th>
            <td><?= h($universite->nom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse Postale') ?></th>
            <td><?= h($universite->adresse_postale) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse Web') ?></th>
            <td><?= h($universite->adresse_web) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adresse Mail') ?></th>
            <td><?= h($universite->adresse_mail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($universite->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Programmes') ?></h4>
        <?php if (!empty($universite->programmes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Intitule') ?></th>
                <th scope="col"><?= __('Explication') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($universite->programmes as $programmes): ?>
            <tr>
                <td><?= h($programmes->id) ?></td>
                <td><?= h($programmes->intitule) ?></td>
                <td><?= h($programmes->explication) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Programmes', 'action' => 'view', $programmes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Programmes', 'action' => 'edit', $programmes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Programmes', 'action' => 'delete', $programmes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programmes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Diplomes') ?></h4>
        <?php if (!empty($universite->diplomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Universite Id') ?></th>
                <th scope="col"><?= __('Intitule') ?></th>
                <th scope="col"><?= __('Adresse Web') ?></th>
                <th scope="col"><?= __('Niveau') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($universite->diplomes as $diplomes): ?>
            <tr>
                <td><?= h($diplomes->id) ?></td>
                <td><?= h($diplomes->universite_id) ?></td>
                <td><?= h($diplomes->intitule) ?></td>
                <td><?= h($diplomes->adresse_web) ?></td>
                <td><?= h($diplomes->niveau) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Diplomes', 'action' => 'view', $diplomes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Diplomes', 'action' => 'edit', $diplomes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Diplomes', 'action' => 'delete', $diplomes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diplomes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
