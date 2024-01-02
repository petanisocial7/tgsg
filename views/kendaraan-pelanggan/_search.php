<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\KendaraanPelangganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-pelanggan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pelanggan_id') ?>

    <?= $form->field($model, 'nama_kendaraan') ?>

    <?= $form->field($model, 'tahun_kendaraan') ?>

    <?= $form->field($model, 'plat_kendaraan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
