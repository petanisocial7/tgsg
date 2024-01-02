<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\CarbonSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carbon-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kendaraan_pelanggan_id') ?>

    <?= $form->field($model, 'pelanggan_id') ?>

    <?= $form->field($model, 'nama_part') ?>

    <?= $form->field($model, 'jenis_motif') ?>

    <?php // echo $form->field($model, 'harga_motif') ?>

    <?php // echo $form->field($model, 'panjang_part') ?>

    <?php // echo $form->field($model, 'lebar_part') ?>

    <?php // echo $form->field($model, 'biaya_carbon') ?>

    <?php // echo $form->field($model, 'nama_part2') ?>

    <?php // echo $form->field($model, 'jenis_motif2') ?>

    <?php // echo $form->field($model, 'harga_motif2') ?>

    <?php // echo $form->field($model, 'panjang_part2') ?>

    <?php // echo $form->field($model, 'lebar_part2') ?>

    <?php // echo $form->field($model, 'biaya_carbon2') ?>

    <?php // echo $form->field($model, 'nama_part3') ?>

    <?php // echo $form->field($model, 'jenis_motif3') ?>

    <?php // echo $form->field($model, 'harga_motif3') ?>

    <?php // echo $form->field($model, 'panjang_part3') ?>

    <?php // echo $form->field($model, 'lebar_part3') ?>

    <?php // echo $form->field($model, 'biaya_carbon3') ?>

    <?php // echo $form->field($model, 'nama_part4') ?>

    <?php // echo $form->field($model, 'jenis_motif4') ?>

    <?php // echo $form->field($model, 'harga_motif4') ?>

    <?php // echo $form->field($model, 'panjang_part4') ?>

    <?php // echo $form->field($model, 'lebar_part4') ?>

    <?php // echo $form->field($model, 'biaya_carbon4') ?>

    <?php // echo $form->field($model, 'nama_part5') ?>

    <?php // echo $form->field($model, 'jenis_motif5') ?>

    <?php // echo $form->field($model, 'harga_motif5') ?>

    <?php // echo $form->field($model, 'panjang_part5') ?>

    <?php // echo $form->field($model, 'lebar_part5') ?>

    <?php // echo $form->field($model, 'biaya_carbon5') ?>

    <?php // echo $form->field($model, 'nama_part6') ?>

    <?php // echo $form->field($model, 'jenis_motif6') ?>

    <?php // echo $form->field($model, 'harga_motif6') ?>

    <?php // echo $form->field($model, 'panjang_part6') ?>

    <?php // echo $form->field($model, 'lebar_part6') ?>

    <?php // echo $form->field($model, 'biaya_carbon6') ?>

    <?php // echo $form->field($model, 'nama_part7') ?>

    <?php // echo $form->field($model, 'jenis_motif7') ?>

    <?php // echo $form->field($model, 'harga_motif7') ?>

    <?php // echo $form->field($model, 'panjang_part7') ?>

    <?php // echo $form->field($model, 'lebar_part7') ?>

    <?php // echo $form->field($model, 'biaya_carbon7') ?>

    <?php // echo $form->field($model, 'nama_part8') ?>

    <?php // echo $form->field($model, 'jenis_motif8') ?>

    <?php // echo $form->field($model, 'harga_motif8') ?>

    <?php // echo $form->field($model, 'panjang_part8') ?>

    <?php // echo $form->field($model, 'lebar_part8') ?>

    <?php // echo $form->field($model, 'biaya_carbon8') ?>

    <?php // echo $form->field($model, 'nama_part9') ?>

    <?php // echo $form->field($model, 'jenis_motif9') ?>

    <?php // echo $form->field($model, 'harga_motif9') ?>

    <?php // echo $form->field($model, 'panjang_part9') ?>

    <?php // echo $form->field($model, 'lebar_part9') ?>

    <?php // echo $form->field($model, 'biaya_carbon9') ?>

    <?php // echo $form->field($model, 'nama_part10') ?>

    <?php // echo $form->field($model, 'jenis_motif10') ?>

    <?php // echo $form->field($model, 'harga_motif10') ?>

    <?php // echo $form->field($model, 'panjang_part10') ?>

    <?php // echo $form->field($model, 'lebar_part10') ?>

    <?php // echo $form->field($model, 'biaya_carbon10') ?>

    <?php // echo $form->field($model, 'biaya_tambahan') ?>

    <?php // echo $form->field($model, 'total_biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
