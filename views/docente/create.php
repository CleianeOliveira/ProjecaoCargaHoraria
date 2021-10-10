<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Docente */

$this->title = 'Novo Docente';
$this->params['breadcrumbs'][] = ['label' => 'Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docente-create box box-primary">

    <div class="box-header">    
    </div>
    
    <div class="box-body">


        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
