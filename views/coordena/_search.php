<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoordenaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="coordena-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'USUARIO_ID') ?>

    <?= $form->field($model, 'CURSO_ID') ?>

    <?= $form->field($model, 'INICIO') ?>

    <?= $form->field($model, 'FIM') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
