<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Insert';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<h1 style="text-align: center;">Formulario de registro de Países</h1>
<div class="row">
    <?php if($messaje !=''){
    ?>
    <script>
        setTimeout(function(){
            document.querySelector('.mensaje').remove();
        },5000)
    </script>
    <div class=" mensaje bg-danger">
        <h2 style="color: black; text-align: center;"><?=$messaje?></h2>
    </div>
    <?php } ?>
    
    
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(['id' => 'country-form']); ?>

        <?= $form->field($model, 'code')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'name')->textInput() ?>

        <?= $form->field($model, 'population')?>

        <div class="form-group">
            <?= Html::submitButton('Registar', ['class' => 'btn btn-success', 'name' => 'registrar']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>