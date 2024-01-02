<?php

use app\models\Pelanggan;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\YearSelectbox;

/* @var $this yii\web\View */
/* @var $model app\models\KendaraanPelanggan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kendaraan-pelanggan-form">
    <div class="x_panel">
        <div class="x_title">
            <h2>Masukkan Data Kendaraan Kamu Disini</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">

                <div class="col-md-2">
                    <?php $array = Pelanggan::find()->all(); ?>
                    <?= $form->field($model, 'pelanggan_id')->dropDownList(ArrayHelper::map($array, 'id', function ($model) {
                        return $model->id . ". " . $model->nama_pelanggan;
                    })) ?>
                </div>

                <div class="col-md-4">
                    <?= $form->field($model, 'nama_kendaraan')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'cth: Yamaha Xmax 250'
                    ]) ?>
                </div>

                <div class="col-md-2">
                    <?= $form->field($model, 'tahun_kendaraan')->widget(etsoft\widgets\YearSelectbox::classname(), [
                        'yearStart' => 2000,
                        'yearStartType' => 'fix',
                        'yearEnd' => 0,
                    ]); ?>
                </div>


                <div class="col-md-4">
                    <?= $form->field($model, 'plat_kendaraan')->textInput([
                        'maxlength' => true,
                        'placeholder' => 'Opsional cth: BK 0909 ABE'
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