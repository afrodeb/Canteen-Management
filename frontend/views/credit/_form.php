<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Credit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="credit-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>

    <?= $form->field($model, 'count')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
