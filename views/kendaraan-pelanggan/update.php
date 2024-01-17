<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KendaraanPelanggan */

$this->title = 'Update Kendaraan Pelanggan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kendaraan Pelanggans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kendaraan-pelanggan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'namaPelanggan' => $namaPelanggan
    ]) ?>

</div>