<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Emprestimo */

$this->title = 'Update Emprestimo: ' . $model->id_emprestimo;
$this->params['breadcrumbs'][] = ['label' => 'Emprestimos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_emprestimo, 'url' => ['view', 'id' => $model->id_emprestimo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="emprestimo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
