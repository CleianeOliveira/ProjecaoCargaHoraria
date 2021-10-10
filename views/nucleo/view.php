<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nucleo */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Núcleos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="nucleo-view box box-primary">
    <div class="box-header">

        

    </div>

    <div class="box-body">

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'id',
                'nome',
            ],
        ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-chevron-left"></i> Voltar', ['index'], ['class' => 'btn btn-primary']) ?>    
    </div>
</div>
