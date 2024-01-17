<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carbon */

$this->title = 'Update Carbon: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Carbons', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carbon-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'jenisMotif' => $jenisMotif,
        'namaPelanggan' => $namaPelanggan,
        'namaKendaraan' => $namaKendaraan
    ]) ?>

</div>