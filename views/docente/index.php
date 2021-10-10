<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Docentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="docente-index box box-primary">

    <div class="box-header">

    <p>
        <?= Html::a('Novo Docente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
</div>

    <div class="box-body">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nome',
            [
                'attribute'=>'nucleo.nome',
                'label'=>'Núcleo',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>

</div>
