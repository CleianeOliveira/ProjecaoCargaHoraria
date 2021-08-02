<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Coordena */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordena-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'USUARIO_ID')->textInput() ?>

    <?= $form->field($model, 'CURSO_ID')->textInput() ?>

    <?= $form->field($model, 'INICIO')->textInput() ?>

    <?= $form->field($model, 'FIM')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
