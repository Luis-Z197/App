<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Recive datos';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<h1 style="text-align: center;">Mostrando datos del form</h1>
<ul>
    <li><?=$model->name ?></li>
    <li><?=$model->email ?></li>
    <li><?=$model->password ?></li>
</ul>