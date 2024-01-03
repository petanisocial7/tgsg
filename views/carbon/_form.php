<?php

use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carbon */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carbon-form">
    <div class="x_panel">
        <div class="x_title">
            <h2>Masukkan Data Kendaraan Kamu Disini</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <!-- jgn lupa misaahin lol biar gk beserak -->


                <div class="col-md-12 col-sm-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Info Pelanggan</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="col-md-6">
                                <?= $form->field($model, 'kendaraan_pelanggan_id')->textInput([
                                    'maxlength' => true,
                                    'placeholder' => 'cth: Yamaha Xmax 250'
                                ]) ?>
                            </div>

                            <div class="col-md-6">
                                <?= $form->field($model, 'pelanggan_id')->textInput([
                                    'maxlength' => true,
                                    'placeholder' => 'cth: Yamaha Xmax 250'
                                ]) ?>
                            </div>

                            <div class="col-md-6">
                                <?= $form->field($model, 'biaya_tambahan')->textInput() ?>
                            </div>

                            <div class="col-md-6">
                                <?= $form->field($model, 'total_biaya')->textInput() ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 1</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif')->widget(Select2::classname(), [
                                'data' => $jenisMotif,
                                'options' => ['placeholder' => 'Silahkan Pilih Motif'],
                                'pluginOptions' => [
                                    'allowClear' => true
                                ],
                            ]);
                            ?>

                            <?= $form->field($model, 'harga_motif')->textInput(['type' => 'number']) ?>

                            <?= $form->field($model, 'panjang_part')->textInput() ?>

                            <?= $form->field($model, 'lebar_part')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 2</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part2')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif2')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif2')->textInput() ?>

                            <?= $form->field($model, 'panjang_part2')->textInput() ?>

                            <?= $form->field($model, 'lebar_part2')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon2')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 3</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part3')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif3')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif3')->textInput() ?>

                            <?= $form->field($model, 'panjang_part3')->textInput() ?>

                            <?= $form->field($model, 'lebar_part3')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon3')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 4</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part4')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif4')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif4')->textInput() ?>

                            <?= $form->field($model, 'panjang_part4')->textInput() ?>

                            <?= $form->field($model, 'lebar_part4')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon4')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 5</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">

                            <?= $form->field($model, 'nama_part5')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif5')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif5')->textInput() ?>

                            <?= $form->field($model, 'panjang_part5')->textInput() ?>

                            <?= $form->field($model, 'lebar_part5')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon5')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 6</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part6')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif6')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif6')->textInput() ?>

                            <?= $form->field($model, 'panjang_part6')->textInput() ?>

                            <?= $form->field($model, 'lebar_part6')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon6')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 7</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part7')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif7')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif7')->textInput() ?>

                            <?= $form->field($model, 'panjang_part7')->textInput() ?>

                            <?= $form->field($model, 'lebar_part7')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon7')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 8</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part8')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif8')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif8')->textInput() ?>

                            <?= $form->field($model, 'panjang_part8')->textInput() ?>

                            <?= $form->field($model, 'lebar_part8')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon8')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 9</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part9')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif9')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif9')->textInput() ?>

                            <?= $form->field($model, 'panjang_part9')->textInput() ?>

                            <?= $form->field($model, 'lebar_part9')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon9')->textInput() ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 style="width:100%;text-align:center;">Carbon Part 10</h2>
                            <div class=" clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?= $form->field($model, 'nama_part10')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'jenis_motif10')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'harga_motif10')->textInput() ?>

                            <?= $form->field($model, 'panjang_part10')->textInput() ?>

                            <?= $form->field($model, 'lebar_part10')->textInput() ?>

                            <?= $form->field($model, 'biaya_carbon10')->textInput() ?>
                        </div>
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
</div>