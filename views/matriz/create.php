<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Matriz */

$this->title = 'Nova Matriz - '.$curso->nome;
$this->params['breadcrumbs'][] = ['label' => 'Matrizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="matriz-create box box-primary">

    <div class="box-header"></div>
    <div class="box-body"
        

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
