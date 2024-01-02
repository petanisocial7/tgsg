<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\RincianJasaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rincian-jasa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kendaraan_pelanggan_id') ?>

    <?= $form->field($model, 'pelanggan_id') ?>

    <?= $form->field($model, 'jenis_jasa') ?>

    <?= $form->field($model, 'tanggal_dibuat') ?>

    <?php // echo $form->field($model, 'tanggal_diterima') ?>

    <?php // echo $form->field($model, 'estimasi_siap') ?>

    <?php // echo $form->field($model, 'status_pengerjaan') ?>

    <?php // echo $form->field($model, 'status_barang') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
