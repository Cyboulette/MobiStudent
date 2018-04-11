<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Etudiant[]|\Cake\Collection\CollectionInterface $etudiants
 */
?>
<div class="etudiants index content">
    <h3><?= __('Étudiants') ?> <a href="etudiants/add" class="btn btn-success btn-sm">Créer un étudiant</a></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('diplome_id', 'Diplôme') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_etudiant', 'N° étudiant') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom', 'Prénom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($etudiants as $etudiant): ?>
            <tr>
                <td><?= $etudiant->has('diplome') ? $this->Html->link($etudiant->diplome->intitule, ['controller' => 'Diplomes', 'action' => 'edit', $etudiant->diplome->id]) : '' ?></td>
                <td><?= h($etudiant->num_etudiant) ?></td>
                <td><?= h($etudiant->nom) ?></td>
                <td><?= h($etudiant->prenom) ?></td>
                <td><?= h($etudiant->email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $etudiant->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $etudiant->id], ['class' => 'btn btn-outline-primary btn-sm', 'confirm' => __('Voulez vous vraiment supprimer cet étudiant ?')]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Premier')) ?>
            <?= $this->Paginator->prev('< ' . __('Précédent')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Suivant') . ' >') ?>
            <?= $this->Paginator->last(__('Dernier') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, actuellement {{current}} étudiant sur {{count}} au total')]) ?></p>
    </div>
</div>
