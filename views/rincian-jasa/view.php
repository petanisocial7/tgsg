<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\RincianJasa */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rincian Jasas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="rincian-jasa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'kendaraan_pelanggan_id',
            'pelanggan_id',
            'jenis_jasa',
            'tanggal_dibuat',
            'tanggal_diterima',
            'estimasi_siap',
            'status_pengerjaan',
            'status_barang',
        ],
    ]) ?>

</div>
