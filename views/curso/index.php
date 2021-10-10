<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CursoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cursos';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="curso-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Novo Curso', ['create'], ['class' => 'btn btn-primary']) ?>        
    </div>
    <div class="box-body">  
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                //['class' => 'yii\grid\SerialColumn'],

                //'ID',
                'nome',                
                'q_periodos',
                'sigla',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                        'delete' => function($url, $model){
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                                'class' => '',
                                'data' => [
                                    'confirm' => 'Deseja excluir este curso?',
                                    'method' => 'post',
                                ],
                            ]);
                        }
                    ]
                
                ],
                
            ],
            'summary' => '',
        ]); 
        ?>
    </div>
</div>
