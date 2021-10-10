<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Matriz */

$this->title = $model->SIGLA;
$this->params['breadcrumbs'][] = ['label' => 'Matrizes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="matriz-view box box-primary">

    <div class="box-header"></div>
    <div class="box-body">   

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'ID',
                'SIGLA',
                'CH_TOTAL',
                'CURSO_ID',
            ],
        ]) ?>
    </div>

</div>
