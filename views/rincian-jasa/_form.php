<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RincianJasa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rincian-jasa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kendaraan_pelanggan_id')->textInput() ?>

    <?= $form->field($model, 'pelanggan_id')->textInput() ?>

    <?= $form->field($model, 'jenis_jasa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_dibuat')->textInput() ?>

    <?= $form->field($model, 'tanggal_diterima')->textInput() ?>

    <?= $form->field($model, 'estimasi_siap')->textInput() ?>

    <?= $form->field($model, 'status_pengerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status_barang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
