<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoordenaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coordenas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="coordena-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coordena', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'USUARIO_ID',
            'CURSO_ID',
            'INICIO',
            'FIM',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
