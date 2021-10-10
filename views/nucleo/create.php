<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nucleo */

$this->title = 'Novo Núcleo';
$this->params['breadcrumbs'][] = ['label' => 'Núcleos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nucleo-create box box-primary">

    <div class="box-body">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>


</div>
