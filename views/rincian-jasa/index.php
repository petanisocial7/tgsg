<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\RincianJasaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rincian Jasas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rincian-jasa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rincian Jasa', ['create'], ['class' => 'btn btn-success']) ?>
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
            'jenis_jasa',
            'tanggal_dibuat',
            //'tanggal_diterima',
            //'estimasi_siap',
            //'status_pengerjaan',
            //'status_barang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
