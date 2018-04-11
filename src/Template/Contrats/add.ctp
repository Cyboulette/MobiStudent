<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="contrats form content">
    <?= $this->Form->create($contrat) ?>
    <fieldset>
        <legend><?= __('Créer un contrat') ?></legend>
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
    <?= $this->Form->button(__('Créer'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
