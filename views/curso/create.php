<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */

$this->title = 'Novo Curso';
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-create box box-primary">
    <div class="box-body"> 
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
 </div>
