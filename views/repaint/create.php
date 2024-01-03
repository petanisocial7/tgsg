<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Repaint */

$this->title = 'Create Repaint';
$this->params['breadcrumbs'][] = ['label' => 'Repaints', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repaint-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'namaPelanggan' => $namaPelanggan,
        'namaKendaraan' => $namaKendaraan
    ]) ?>

</div>