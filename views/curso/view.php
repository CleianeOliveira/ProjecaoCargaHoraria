<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Curso */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Cursos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="curso-view box box-primary">
    <div class="box-header">
        <h3 class="box-title"></h3>
        <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <?= Html::a('<i class="fa fa-chevron-left"></i> Voltar', ['index'], ['class' => 'btn btn-primary']) ?> 
        </div>
    </div>

    <div class="box-body">
        
        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Dados Gerais</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <?= Html::a('<i class="fa fa-pencil"></i> Editar', ['update','id'=>$model->id], ['class' => 'btn btn-primary']) ?> 
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    //'ID',
                    'nome',
                    'ch_total',
                    'q_periodos',
                    'sigla',
                ],
                 ]) ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->

        <div class="box box-solid box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Matrizes</h3>
                <div class="box-tools pull-right">
                    <!-- Buttons, labels, and many other things can be placed here! -->
                    <!-- Here is a label for example -->
                    <?= Html::a('<i class="fa fa-plus"></i> Novo', ['matriz/create'], ['class' => 'btn btn-primary']) ?> 
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProviderMatriz,
                    //'filterModel' => $searchModel,
                    'summary'=>'',
                    'columns' => [
                       // ['class' => 'yii\grid\SerialColumn'],

                      //  'ID',
                        'SIGLA',
                        'CH_TOTAL',
                       // 'CURSO_ID',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'buttons' => [
                                'update' => function($url, $model, $key){
                                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['matriz/update','id'=>$model->ID], [
                                        'title' => Yii::t('yii', 'Alterar'),
                                    ]);
                                },
             
                                'view' => function($url, $model, $key){ },
                                'delete' => function($url, $model, $key){                                     
                                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
                                    ['matriz/delete', 'id' => $model->ID], 
                                    [
                                        'class' => '',
                                        'data' => [
                                            'confirm' => 'Deseja excluir essa matriz?',
                                            'method' => 'post',
                                        ],
                                    ]);
                                },
                                
                            ]
            
                        ],
                    ],
                ]); ?>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                
            </div>
            <!-- box-footer -->
        </div>
        <!-- /.box -->
        
        
        
    </div>

    <div class="box-footer">                
           
    </div>    
</div>
