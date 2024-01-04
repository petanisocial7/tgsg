<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\RincianJasa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rincian-jasa-form">
    <div class="x_panel">
        <div class="x_title">
            <h2>Masukkan Data Kendaraan Kamu Disini</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

                <div class="col-md-4">
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

                <div class="col-md-4">
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
                    <?= $form->field($model, 'jenis_jasa')->widget(Select2::classname(), [
                        'data' => ['Repaint' => 'Repaint', 'Carbon' => 'Carbon'],
                        'options' => ['placeholder' => ''],
                        'theme' => Select2::THEME_BOOTSTRAP,
                        'pluginOptions' => [
                            'allowClear' => true,

                        ],
                    ]);
                    ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'tanggal_dibuat')->textInput() ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'tanggal_diterima')->textInput() ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'estimasi_siap')->textInput() ?>
                </div>

                <div class="col-md-3">
                    <?= $form->field($model, 'status_pengerjaan')->textInput(['maxlength' => true]) ?>
                </div>

                <div class="col-md-4">
                    <?= $form->field($model, 'status_barang')->textInput(['maxlength' => true]) ?>
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