<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetalheofertaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detalheofertas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detalheoferta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Detalheoferta', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'SEMESTRE_ANO',
            'DISCIPLINA_ID',
            'OFERTA_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
