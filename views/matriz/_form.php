<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Matriz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matriz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SIGLA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CH_TOTAL')->textInput() ?>

    <?= $form->field($model, 'CURSO_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
