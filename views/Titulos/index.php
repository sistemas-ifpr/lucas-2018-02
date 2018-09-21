<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Títulos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="titulos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar Títulos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id_titulo',
            'tipo',
            'titulo',
            'autor',
            'isbn',
            //'edicao',
            //'ano_lancamento',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
