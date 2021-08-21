<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CursoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="curso-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Novo Curso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'NOME',
            'CH_TOTAL',
            'Q_PERIODOS',
            'SIGLA',

            [
                'class' => 'yii\grid\ActionColumn',
                //'template' => '{update} {delete}',
                'buttons' => [
                    'delete' => function($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->ID], [
                            'class' => '',
                            'data' => [
                                'confirm' => 'Tem certeza que desejar excluir este curso?',
                                'method' => 'post',
                            ],
                        ]);
                    }
                ]
            

        ],
    ],
    ]); ?>


</div>
