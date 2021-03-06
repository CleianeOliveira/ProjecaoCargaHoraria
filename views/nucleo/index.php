<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NucleoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Núcleos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nucleo-index box box-primary">
    <div class="box-header with-border">

        <p>
            <?= Html::a('Novo Núcleo', ['create'], ['class' => 'btn btn-primary']) ?>
        </p>

    </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <div class="box-body">

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'summary' => '',
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                'nome',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'buttons' => [
                        'delete' => function($url, $model){
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                                'class' => '',
                                'data' => [
                                    'confirm' => 'Deseja excluir este núcleo?',
                                    'method' => 'post',
                                ],
                            ]);
                        }
                    ]
                
                ],
            ],
        
        ]); 
        
        ?>
    </div>


</div>
