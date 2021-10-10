<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Usuários';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index box box-primary">
    <div class="box-header with-border">
        <p>
            <?= Html::a('Novo Usuário', ['create'], ['class' => 'btn btn-primary']) ?>
        </p>
    </div>

    <div class="box-body">

        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'summary'=>'',
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'ID',
                'nome',
                'login',
                //'SENHA',            
                //',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>



</div>
