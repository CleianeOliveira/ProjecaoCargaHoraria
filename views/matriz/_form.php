<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Curso;

/* @var $this yii\web\View */
/* @var $model app\models\Matriz */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="matriz-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'SIGLA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CH_TOTAL')->textInput(['type'=>'number']) ?>

    

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
