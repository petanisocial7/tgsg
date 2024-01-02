<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\RepaintSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repaint-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kendaraan_pelanggan_id') ?>

    <?= $form->field($model, 'pelanggan_id') ?>

    <?= $form->field($model, 'nama_part') ?>

    <?= $form->field($model, 'nama_warna') ?>

    <?php // echo $form->field($model, 'biaya_repaint') ?>

    <?php // echo $form->field($model, 'biaya_tambahan') ?>

    <?php // echo $form->field($model, 'total_biaya') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
