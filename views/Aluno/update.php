<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Alunos */

$this->title = 'Update Alunos: ' . $model->id_aluno;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_aluno, 'url' => ['view', 'id' => $model->id_aluno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="alunos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
