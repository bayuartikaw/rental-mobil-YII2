<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pengembalian */

$this->title = 'Update Pengembalian: ' . $model->id_pengembalian;
?>
<div class="pengembalian-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
