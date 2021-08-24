<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Nucleo;

/* @var $this yii\web\View */
/* @var $model app\models\Disciplina */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Disciplinas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="disciplina-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Alterar', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Excluir', ['delete', 'id' => $model->ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja excluir esta disciplina?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'ID',
            'NOME',
            'CH',
            'PERIODO',
            [
                'attribute'=>'nucleo.NOME',
                'label'=>'Núcleo',
            ],
            [
                'attribute'=>'matriz.SIGLA',
                'label'=>'Matriz',
            ],
        ],
    ]) ?>

</div>
