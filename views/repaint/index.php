<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\RepaintSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Repaints';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="repaint-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Repaint', ['create'], ['class' => 'btn btn-success']) ?>
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
            'nama_warna',
            //'biaya_repaint',
            //'biaya_tambahan',
            //'total_biaya',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
