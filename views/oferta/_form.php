<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Oferta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oferta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SEMESTRE_ANO_INICIO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MATRIZ_ID')->textInput() ?>

    <?= $form->field($model, 'USUARIO_ID')->textInput() ?>

    <?= $form->field($model, 'DATA_REGISTRO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
