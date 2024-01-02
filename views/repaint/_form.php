<?php

use app\models\Pelanggan;
use app\models\KendaraanPelanggan;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Repaint */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="repaint-form">
    <div class="x_panel">
        <div class="x_title">
            <h2>Masukkan Data Kendaraan Kamu Disini</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

                <div class="col-md-3">
                    <?php $array = KendaraanPelanggan::find()->all(); ?>
                    <?= $form->field($model, 'kendaraan_pelanggan_id')->dropDownList(ArrayHelper::map($array, 'pelanggan_id', function ($model) {
                        return $model->pelanggan_id . ". " . $model->nama_kendaraan;
                    })) ?>
                </div>

                <div class="col-md-2">
                    <?php $array = Pelanggan::find()->all(); ?>
                    <?= $form->field($model, 'pelanggan_id')->dropDownList(ArrayHelper::map($array, 'id', function ($model) {
                        return $model->id . ". " . $model->nama_pelanggan;
                    })) ?>
                </div>

                <div class="col-md-4">
                    <?= $form->field($model, 'nama_part')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'cth: Full Body Halus'
                    ]) ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'nama_warna')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'cth: Nardo Bluish Grey    '
                    ]) ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'biaya_repaint')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'cth: Full Body Halus'
                    ]) ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'biaya_tambahan')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'cth: Full Body Halus'
                    ]) ?>
                </div>

                <div class="col-md-6">
                    <?= $form->field($model, 'total_biaya')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'cth: Full Body Halus'
                    ]) ?>
                </div>

            </div>

            <div class="ln_solid"></div>
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>