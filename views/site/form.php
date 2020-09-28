<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Formulario';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<h1 style="text-align: center;">Welcome</h1>
<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['id' => 'test-form']); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email') ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Enviar', ['class' => 'btn btn-primary', 'name' => 'registrar']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>