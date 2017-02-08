<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ToolcSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="toolc-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php// $form->field($model, 'idtool_c') ?>

    <?php// $form->field($model, 'tool_c_no') ?>

    <?php// $form->field($model, 'tool_c_ch') ?>

    <?= $form->field($model, 'idmachine') ?>

    <?= $form->field($model, 'machine_no') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
