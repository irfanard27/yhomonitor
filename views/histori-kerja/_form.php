<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\HistoriKerja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="histori-kerja-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tanggal')->widget(kartik\date\DatePicker::className()) ?>

    <?= $form->field($model, 'waktu_masuk')->widget(kartik\time\TimePicker::className()) ?>

    <?= $form->field($model, 'waktu_keluar')->widget(kartik\time\TimePicker::className()) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
