<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ReclamosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reclamos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Fecha') ?>

    <?= $form->field($model, 'Motivo') ?>

    <?= $form->field($model, 'Descripcion') ?>

    <?= $form->field($model, 'Estatus') ?>

    <?= $form->field($model, 'reclamosID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
