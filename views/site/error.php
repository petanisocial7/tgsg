<?php

/**
 * @var $this yii\web\View
 * @var $name string
 * @var $message string
 * @var $exception \yii\web\HttpException
 */

use yii\helpers\Html;

$this->title = $name;
$textColor = $exception->statusCode === 404 ? "text-yellow" : "text-red";

?>
  
<div class="col-middle">
    <div class="text-center text-center">
        <h1 class="error-number"><?= $exception->statusCode ?></h1>
        <h2><?= nl2br(Html::encode($message)) ?></h2>
        <p>
            Terjadi kesalahan ketika server Web sedang memproses permintaan Anda.
        </p>
        <p>
        Silakan hubungi kami jika menurut Anda ini adalah kesalahan server. Terima kasih (Duplex Garage)
        </p>
    </div>
</div>
