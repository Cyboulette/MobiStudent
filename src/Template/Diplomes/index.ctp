<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diplome[]|\Cake\Collection\CollectionInterface $diplomes
 */
?>
<div class="diplomes index content">
    <h3><?= __('Liste des diplômes') ?> <a href="diplomes/add" class="btn btn-success btn-sm">Créer un diplôme</a></h3>
    <table cellpadding="0" cellspacing="0" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('universite_id', ['label' => 'Université']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('intitule', ['label' => 'Intitulé']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresse_web') ?></th>
                <th scope="col"><?= $this->Paginator->sort('niveau') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($diplomes as $diplome): ?>
            <tr>
                <td><?= $diplome->has('universite') ? $this->Html->link($diplome->universite->nom, ['controller' => 'Universites', 'action' => 'view', $diplome->universite->id]) : '' ?></td>
                <td><?= h($diplome->intitule) ?></td>
                <td><?= h($diplome->adresse_web) ?></td>
                <td><?= $this->Number->format($diplome->niveau) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Modifier'), ['action' => 'edit', $diplome->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $diplome->id], ['class' => 'btn btn-outline-primary btn-sm', 'confirm' => __('Voulez vous vraiment supprimer ce diplôme ?')]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} sur {{pages}}, actuellement {{current}} diplômes sur {{count}} au total')]) ?></p>
    </div>
</div>
