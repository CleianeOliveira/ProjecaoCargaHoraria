<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="usuario-view box box-primary">

    <div class="box-header">
    </div>

    <div class="box-body">

        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                
                'nome',
                'login',
                
            ],
        ]) ?>

    </div>

    <div class="box-footer">
        <?= Html::a('<i class="fa fa-chevron-left"></i> Voltar', ['index'], ['class' => 'btn btn-primary']) ?>    
    </div>

</div>
