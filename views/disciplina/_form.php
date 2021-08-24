<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Nucleo;
use app\models\Matriz;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Disciplina */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="disciplina-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CH')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'PERIODO')->textInput(['type'=>'number']) ?>

    <?= $form->field($model, 'NUCLEO_ID')->
       dropDownList(ArrayHelper::map(Nucleo::find()->orderBy('NOME')->all(),'ID','NOME'),
           ['prompt' => 'Selecione um Núcleo'] )
    ?>


    <?= $form->field($model, 'MATRIZ_ID')->
        dropDownList(ArrayHelper::map(Matriz::find()->orderBy('SIGLA')->all(),'ID','SIGLA'),
            ['prompt' => 'Selecione uma Matriz'] )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
