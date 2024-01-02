<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carbon */

$this->title = 'Create Carbon';
$this->params['breadcrumbs'][] = ['label' => 'Carbons', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carbon-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
