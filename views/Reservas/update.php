<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Reservas */

$this->title = 'Update Reservas: ' . $model->id_reserva;
$this->params['breadcrumbs'][] = ['label' => 'Reservas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_reserva, 'url' => ['view', 'id' => $model->id_reserva]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reservas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
