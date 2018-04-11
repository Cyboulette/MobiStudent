<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrat[]|\Cake\Collection\CollectionInterface $contrats
 */
?>
<div class="contrats index content">
    <h3><?= __('Contrats') ?> <a href="contrats/add" class="btn btn-success btn-sm">Créer un contrat</a></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('diplome_id', 'Diplôme') ?></th>
                <th scope="col"><?= $this->Paginator->sort('demande_mobilite_id', 'Demande de mobilité') ?></th>
                <th scope="col"><?= $this->Paginator->sort('programme_id', 'Programme') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duree', 'Durée') ?></th>
                <th scope="col"><?= $this->Paginator->sort('etat', 'État') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ordre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contrats as $contrat): ?>
            <tr>
                <td><?= $contrat->has('diplome') ? $this->Html->link($contrat->diplome->intitule, ['controller' => 'Diplomes', 'action' => 'edit', $contrat->diplome->id]) : '' ?></td>
                <td><?= $contrat->has('demande_mobilite') ? $this->Html->link($contrat->demande_mobilite->id, ['controller' => 'DemandeMobilites', 'action' => 'view', $contrat->demande_mobilite->id]) : '' ?></td>
                <td><?= $contrat->has('programme') ? $this->Html->link($contrat->programme->intitule, ['controller' => 'Programmes', 'action' => 'edit', $contrat->programme->id]) : '' ?></td>
                <td><?= $this->Number->format($contrat->duree) ?></td>
                <td><?= h($contrat->etat) ?></td>
                <td><?= h($contrat->ordre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $contrat->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $contrat->id], ['class' => 'btn btn-outline-primary btn-sm', 'confirm' => __('Voulez vous vraiment supprimer ce contrat ?')]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, actuellement {{current}} contrats sur {{count}} au total')]) ?></p>
    </div>
</div>
