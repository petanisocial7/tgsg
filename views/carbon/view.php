<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Carbon */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Carbons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="carbon-view">

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
            'nama_part',
            'jenis_motif',
            'harga_motif',
            'panjang_part',
            'lebar_part',
            'biaya_carbon',
            'nama_part2',
            'jenis_motif2',
            'harga_motif2',
            'panjang_part2',
            'lebar_part2',
            'biaya_carbon2',
            'nama_part3',
            'jenis_motif3',
            'harga_motif3',
            'panjang_part3',
            'lebar_part3',
            'biaya_carbon3',
            'nama_part4',
            'jenis_motif4',
            'harga_motif4',
            'panjang_part4',
            'lebar_part4',
            'biaya_carbon4',
            'nama_part5',
            'jenis_motif5',
            'harga_motif5',
            'panjang_part5',
            'lebar_part5',
            'biaya_carbon5',
            'nama_part6',
            'jenis_motif6',
            'harga_motif6',
            'panjang_part6',
            'lebar_part6',
            'biaya_carbon6',
            'nama_part7',
            'jenis_motif7',
            'harga_motif7',
            'panjang_part7',
            'lebar_part7',
            'biaya_carbon7',
            'nama_part8',
            'jenis_motif8',
            'harga_motif8',
            'panjang_part8',
            'lebar_part8',
            'biaya_carbon8',
            'nama_part9',
            'jenis_motif9',
            'harga_motif9',
            'panjang_part9',
            'lebar_part9',
            'biaya_carbon9',
            'nama_part10',
            'jenis_motif10',
            'harga_motif10',
            'panjang_part10',
            'lebar_part10',
            'biaya_carbon10',
            'biaya_tambahan',
            'total_biaya',
        ],
    ]) ?>

</div>
