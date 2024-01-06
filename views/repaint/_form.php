<?php

use app\models\Pelanggan;
use app\models\KendaraanPelanggan;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

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
                    <?= $form->field($model, 'kendaraan_pelanggan_id')->widget(Select2::classname(), [
                        'data' => $namaKendaraan,
                        'options' => ['placeholder' => ''],
                        'theme' => Select2::THEME_BOOTSTRAP,
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
                </div>


                <div class="col-md-2">
                    <?= $form->field($model, 'pelanggan_id')->widget(Select2::classname(), [
                        'data' => $namaPelanggan,
                        'options' => ['placeholder' => ''],
                        'theme' => Select2::THEME_BOOTSTRAP,
                        'pluginOptions' => [
                            'allowClear' => true
                        ],
                    ]);
                    ?>
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
                        'readonly' => true,
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