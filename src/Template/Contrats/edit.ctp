<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="contrats form content">
    <?= $this->Form->create($contrat) ?>
    <fieldset>
        <legend><?= __('Modifier un contrat') ?></legend>
        <?php
        echo $this->Form->control('diplome_id', ['options' => $diplomes, 'label' => 'Diplôme', 'required' => true]);
        echo $this->Form->control('demande_mobilite_id', ['options' => $demandeMobilites, 'label' => 'Demande de mobilité', 'required' => true]);
        echo $this->Form->control('programme_id', ['options' => $programmes, 'empty' => true, 'label' => 'Programme']);
        echo $this->Form->control('duree');
        echo $this->Form->control('etat', ['type' => 'select', 'required' => true, 'options' => [
            'En cours' => 'En cours', 'Validé' => 'Validé', 'Refusé' => 'Refusé'
        ]]);
        echo $this->Form->control('ordre');
        echo $this->Form->control('cours._ids', ['options' => $cours, 'label' => 'Cours associés']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
    <?= $this->Form->postLink(
        __('Supprimer'),
        ['action' => 'delete', $contrat->id],
        ['confirm' => __('Êtes vous sûr de vouloir supprimer ce contrat ?'), 'class' => 'btn btn-danger']
    )
    ?>
</div>
