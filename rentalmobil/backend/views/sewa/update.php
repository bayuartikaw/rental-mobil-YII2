<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sewa */

$this->title = 'Update Sewa: ' . $model->no_ktp;
?>
<div class="sewa-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
