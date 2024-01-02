<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KendaraanPelanggan */

$this->title = 'Create Kendaraan Pelanggan';
$this->params['breadcrumbs'][] = ['label' => 'Kendaraan Pelanggans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-pelanggan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
