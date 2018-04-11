<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        MobiStudent FRONT
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->script('jquery-3.3.1.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div class="menu-wrapper">
        <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-primary">
            <a class="navbar-brand" href="index.jsp">MobiStudent FRONT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <?=$this->Html->link('Diplômes', '/diplomes', ['class' => 'nav-link'])?>
                    </li>
                    <li class="nav-item">
                        <?=$this->Html->link('Cours', '/cours', ['class' => 'nav-link'])?>
                    </li>
                    <li class="nav-item">
                        <?=$this->Html->link('Étudiants', '/etudiants', ['class' => 'nav-link'])?>
                    </li>
                    <li class="nav-item">
                        <?=$this->Html->link('Programmes', '/programmes', ['class' => 'nav-link'])?>
                    </li>
                    <li class="nav-item">
                        <?=$this->Html->link('Contrats', '/contrats', ['class' => 'nav-link'])?>
                    </li>
                    <li class="nav-item">
                        <?=$this->Html->link('Universités', '/universites', ['class' => 'nav-link'])?>
                    </li>

                    <li class="nav-item">
                        <a href="http://localhost:8080/MobiStudentJSP/" target="_blank" class="nav-link">Administration</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container clearfix">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
