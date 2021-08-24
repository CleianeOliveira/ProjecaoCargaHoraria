<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Nucleo;
use app\models\Matriz;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $searchModel app\models\DisciplinaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Disciplinas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciplina-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Nova Disciplina', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        
        'columns' => [
          //  ['class' => 'yii\grid\SerialColumn'],

           // 'ID',
            [
            'attribute'=>'NOME',
            'filterInputOptions' => [
                'class'       => 'form-control',
                'placeholder' => 'Digite um termo de busca e pressione ENTER'
                ], 
            ],

            'CH',
            'PERIODO',
            [
                'attribute'=>'nucleo.NOME',
                'label'=>'Núcleo',   
                'filter' => Html::activeDropDownList($searchModel, 'nucleo.NOME', ArrayHelper::map(Nucleo::find()->asArray()->orderby('NOME')->all(), 'NOME', 'NOME'),
                    ['class'=>'form-control','prompt' => 'Selecione um Núcleo']),             
            ],
            [
                'attribute'=>'matriz.SIGLA',
                'label'=>'Matriz',
                'filter' => Html::activeDropDownList($searchModel, 'matriz.SIGLA', ArrayHelper::map(Matriz::find()->asArray()->orderby('SIGLA')->all(), 'SIGLA', 'SIGLA'),
                    ['class'=>'form-control','prompt' => 'Selecione uma Matriz']),  
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
