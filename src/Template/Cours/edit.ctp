<?php $this->loadHelper('Form', ['templates' => 'forms/bootstrap_default_form']);?>
<div class="cours form content">
    <?= $this->Form->create($cour) ?>
    <fieldset>
        <legend><?= __('Modifier un cours') ?></legend>
        <?php
            echo $this->Form->control('libelle', ['required' => true, 'label' => 'Libellé']);
            echo $this->Form->control('nb_ects', ['required' => true]);
            echo $this->Form->control('contrats._ids', ['options' => $contrats, 'label' => 'Contrats associés']);
            echo $this->Form->control('cours._ids', ['options' => $cours, 'label' => 'Cours compatibles']);
            echo $this->Form->control('diplomes._ids', ['options' => $diplomes, 'label' => 'Diplômes liés']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modifier'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
    <?= $this->Form->postLink(
        __('Supprimer'),
        ['action' => 'delete', $cour->id],
        ['confirm' => __('Êtes vous sûr de vouloir supprimer ce cours ?'), 'class' => 'btn btn-danger']
    )
    ?>
</div>
