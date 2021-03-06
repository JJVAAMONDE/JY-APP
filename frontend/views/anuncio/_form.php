<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anuncio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anuncio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'arr_Imagen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Categoria')->textInput() ?>

    <?= $form->field($model, 'Clasificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descripcion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'DireccionVendedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Nombre_Vendedor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cantidad_Articulo')->textInput() ?>

    <?= $form->field($model, 'Calificacion_Vendedor')->textInput() ?>

    <?= $form->field($model, 'Fecha_Publicacion')->textInput() ?>

    <?= $form->field($model, 'Fecha_Caducidad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anuncioID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
