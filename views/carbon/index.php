<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\CarbonSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carbons';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carbon-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Carbon', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'kendaraan_pelanggan_id',
            'pelanggan_id',
            'nama_part',
            'jenis_motif',
            //'harga_motif',
            //'panjang_part',
            //'lebar_part',
            //'biaya_carbon',
            //'nama_part2',
            //'jenis_motif2',
            //'harga_motif2',
            //'panjang_part2',
            //'lebar_part2',
            //'biaya_carbon2',
            //'nama_part3',
            //'jenis_motif3',
            //'harga_motif3',
            //'panjang_part3',
            //'lebar_part3',
            //'biaya_carbon3',
            //'nama_part4',
            //'jenis_motif4',
            //'harga_motif4',
            //'panjang_part4',
            //'lebar_part4',
            //'biaya_carbon4',
            //'nama_part5',
            //'jenis_motif5',
            //'harga_motif5',
            //'panjang_part5',
            //'lebar_part5',
            //'biaya_carbon5',
            //'nama_part6',
            //'jenis_motif6',
            //'harga_motif6',
            //'panjang_part6',
            //'lebar_part6',
            //'biaya_carbon6',
            //'nama_part7',
            //'jenis_motif7',
            //'harga_motif7',
            //'panjang_part7',
            //'lebar_part7',
            //'biaya_carbon7',
            //'nama_part8',
            //'jenis_motif8',
            //'harga_motif8',
            //'panjang_part8',
            //'lebar_part8',
            //'biaya_carbon8',
            //'nama_part9',
            //'jenis_motif9',
            //'harga_motif9',
            //'panjang_part9',
            //'lebar_part9',
            //'biaya_carbon9',
            //'nama_part10',
            //'jenis_motif10',
            //'harga_motif10',
            //'panjang_part10',
            //'lebar_part10',
            //'biaya_carbon10',
            //'biaya_tambahan',
            //'total_biaya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
