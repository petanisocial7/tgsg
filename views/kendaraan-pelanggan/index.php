<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\KendaraanPelangganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kendaraan Pelanggans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-pelanggan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kendaraan Pelanggan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pelanggan_id',
            'nama_kendaraan',
            'tahun_kendaraan',
            'plat_kendaraan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
