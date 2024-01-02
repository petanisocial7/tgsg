<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

<?php

use yii\helpers\Html;
use yii\rbac\Item;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pelanggan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pelanggan-form">
	<div class="x_panel">
		<div class="x_title">
			<h2>Masukkan Data Kamu Disini</h2>

			<div class="clearfix"></div>
		</div>
		<div class="x_content">
			<br>
			<?php $form = ActiveForm::begin(); ?>
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<!-- <input type="text" class="form-control has-feedback-left" name="Pelanggan[nama_pelanggan]" id="nama_pelanggan" placeholder="Masukkan Nama Kamu Disini">
					<span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span> -->
					<?= $form->field($model, 'nama_pelanggan')->textInput(['maxlength' => true]) ?>
				</div>

				<div class="col-md-4 col-sm-4">
					<!-- <input type="text" class="form-control has-feedback-left" name="Pelanggan[alamat_pelanggan]" id="alamat_pelanggan" placeholder="Masukkan Alamat Kamu Disini">
					<span class="fa fa-address-book form-control-feedback left" aria-hidden="true"></span> -->
					<?= $form->field($model, 'alamat_pelanggan')->textInput(['maxlength' => true]) ?>
				</div>

				<div class="col-md-4 col-sm-4">
					<!-- <input type="tel" class="form-control has-feedback-left" name="Pelanggan[nomor_telepon]" id="nomor_telepon" placeholder="Masukkan No HP Kamu Disini">
					<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span> -->
					<?= $form->field($model, 'nomor_telepon')->textInput(['maxlength' => true]) ?>
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