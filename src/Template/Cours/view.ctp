<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cour $cour
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cour'), ['action' => 'edit', $cour->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cour'), ['action' => 'delete', $cour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cour->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contrats'), ['controller' => 'Contrats', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrat'), ['controller' => 'Contrats', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cours'), ['controller' => 'Cours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cour'), ['controller' => 'Cours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Diplomes'), ['controller' => 'Diplomes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Diplome'), ['controller' => 'Diplomes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cours view large-9 medium-8 columns content">
    <h3><?= h($cour->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Libelle') ?></th>
            <td><?= h($cour->libelle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cour->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nb Ects') ?></th>
            <td><?= $this->Number->format($cour->nb_ects) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contrats') ?></h4>
        <?php if (!empty($cour->contrats)): ?>
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
            <?php foreach ($cour->contrats as $contrats): ?>
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
        <h4><?= __('Related Cours') ?></h4>
        <?php if (!empty($cour->cours)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Libelle') ?></th>
                <th scope="col"><?= __('Nb Ects') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cour->cours as $cours): ?>
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
        <h4><?= __('Related Diplomes') ?></h4>
        <?php if (!empty($cour->diplomes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Universite Id') ?></th>
                <th scope="col"><?= __('Intitule') ?></th>
                <th scope="col"><?= __('Adresse Web') ?></th>
                <th scope="col"><?= __('Niveau') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cour->diplomes as $diplomes): ?>
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
