<?php

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;

/**
 * @var yii\web\View $this
 * @var backend\models\Rol $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="rol-form">

    <?php $form = ActiveForm::begin(['type' => ActiveForm::TYPE_HORIZONTAL]); echo Form::widget([

        'model' => $model,
        'form' => $form,
        'columns' => 1,
        'attributes' => [

            'nombre_rol' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => 'Enter Nombre Rol...', 'maxlength' => 32]],

        ]

    ]);

    echo Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'),
        ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']
    );
    ActiveForm::end(); ?>
    
    <?php
    $opciones = \yii\helpers\ArrayHelper::map($tipoOperaciones, 'id', 'nombre');
    echo $form->field($model, 'operaciones')->checkboxList($opciones, ['unselect'=>NULL]);
    ?>

</div>
    

