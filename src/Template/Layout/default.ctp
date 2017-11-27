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

$prefijoTitulo = 'S-Vet';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $prefijoTitulo ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    

    <!-- Le agrego Bootstrap al Cake, para no usar Foundation -->
    <!-- **************************************************** -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
        
    <!-- CSS Originales de Foundation -->
    <!-- **************************** -->
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                
                <!-- Acá va la magia de los botones de logout/login -->
                <!-- ********************************************** -->
                
                <!-- Primero ponemos un IF-->
                
                <?php if ($this->request->session()->read('Auth.User.id')) { ?>
                
                <li>
                    <a href="">
                        <?= $this->request->session()->read('Auth.User.user_name') ?>
                    </a>    
                </li>
                <li>
                    <?= $this->html->link('Cerrar Sesión', ['controller'=>'users','action'=>'logout']) ?>
                </li>
                
                <!-- Cierro el IF-->
                <?php } ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <!--Menú lateral para todos las páginas-->
        <?= $this->element('SideMenus/side_menu_logged_on') ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
