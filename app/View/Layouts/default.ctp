<?php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>

        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->fetch('meta');
        echo $this->Html->css('bootstrap.min');
        echo $this->Html->css('metisMenu.min');
        echo $this->Html->css('timeline');
        echo $this->Html->css('sb-admin-2');
        echo $this->Html->css('morris');
        echo $this->Html->css('font-awesome.min');
        echo $this->fetch('css');
        ?>
    </head>
    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">Fraternidade</a>
                </div>
                <?php if (AuthComponent::user('id')) : ?>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <?php echo $this->Html->link('<i class="fa fa-sign-out fa-fw"></i> Logout', array('controller' => 'users', 'action' => 'logout'), array('escape' => false)); ?>
                        </li>
                    </ul>

                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user fa-fw"></i> Usuarios
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav nav-second-level collapse" style="">
                                        <li>
                                            <?php echo $this->Html->link('Listar', array('controller' => 'users', 'action' => 'index')); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Adcionar', array('controller' => 'users', 'action' => 'add')); ?>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-group fa-fw"></i> Membros
                                        <span class="fa arrow"></span>
                                    </a>
                                    <ul class="nav nav-second-level collapse" style="">
                                        <li>
                                            <?php echo $this->Html->link('Listar', array('controller' => 'associados', 'action' => 'index')); ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Adcionar', array('controller' => 'associados', 'action' => 'add')); ?>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </nav>
            <div id="page-wrapper">
                <br/>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <?php
        echo $this->Html->script('jquery-1.11.0');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('metisMenu.min');
        echo $this->Html->script('raphael.min');
        echo $this->Html->script('sb-admin-2');
        echo $this->fetch('script');
        echo $this->Html->script(array('jquery.mask.min', 'jquery.mask.useful.min', 'jquery.jsonp-2.4.0.min', 'cep-auto-completar.min'));
        ?>

    </body>

</html>