<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

// $this->title = 'My Yii Application';
?>

<div class="site-index">


    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p>
            <?= Html::a('Create Pelanggan', ['pelanggan/create'], ['class' => 'btn btn-success']) ?>
            <button class="btn btn-success"><i class="fa fa-user"></i> Pelanggan</button>
        </p>

        <button class="btn btn-success"><i class="fa fa-car"></i> Kendaraan Pelanggan</button>
        <button class="btn btn-success"><i class="fa fa-paint-brush"></i> Repaint</button>
        <button class="btn btn-success"><i class="fa fa-codepen"></i> Carbon</button>
        <button class="btn btn-success"><i class="fa fa-info"></i> Rincian Jasa</button>



    </div>


</div>