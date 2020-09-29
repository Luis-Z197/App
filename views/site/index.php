<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Bienvenidos</h1>

        <p class="lead">Mi primera Apicación Web con Yii2</p>

        <p><a class="btn btn-lg btn-success" href="index.php?r=country">Crud tabla Country generado con Gii</a></p>
        <p><a class="btn btn-lg btn-primary" href="index.php?r=crud">Crud tabla Country de forma manual</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Saluda</h2>

                <p>Prueba 1 saluda</p>
                <a class="btn btn-lg btn-primary"  href="index.php?r=site/saluda">Saluda</a>
            </div>
            <div class="col-lg-4">
                <h2>Formulario</h2>
                <p>Prueba formulario</p>
                <a class="btn btn-lg btn-secondary"  href="index.php?r=site/form">Mostrar formulario</a>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
