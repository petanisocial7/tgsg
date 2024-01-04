<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\RincianJasa */

$this->title = 'Create Rincian Jasa';
$this->params['breadcrumbs'][] = ['label' => 'Rincian Jasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rincian-jasa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'namaPelanggan' => $namaPelanggan,
        'namaKendaraan' => $namaKendaraan
    ]) ?>

</div>