<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="diplomes form content">
    <?= $this->Form->create($diplome) ?>
    <fieldset>
        <legend><?= __('Créer un diplôme') ?></legend>
        <?php
            echo $this->Form->control('universite_id', ['options' => $universites, 'label' => 'Université', 'required' => true]);
            echo $this->Form->control('intitule', ['label' => 'Intitulé', 'required' => true]);
            echo $this->Form->control('adresse_web');
            echo $this->Form->control('niveau', ['required' => true]);
            echo $this->Form->control('cours._ids', ['options' => $cours, 'label' => 'Cours liés', 'required' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Créer'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
