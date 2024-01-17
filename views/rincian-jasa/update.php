<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RincianJasa */

$this->title = 'Update Rincian Jasa: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rincian Jasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rincian-jasa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'namaPelanggan' => $namaPelanggan,
        'namaKendaraan' => $namaKendaraan
    ]) ?>

</div>