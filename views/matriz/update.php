<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matriz */

$this->title = 'Alterar Matriz: ' . $model->SIGLA;
$this->params['breadcrumbs'][] = ['label' => 'Matrizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->SIGLA, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Alterar';
?>
<div class="matriz-update box box-primary">

    <h1></h1>
    <div class="box-body">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>
