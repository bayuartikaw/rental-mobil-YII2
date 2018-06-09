<?php

use yii\helpers\Html;

$this->title = 'Update Mobil: ' . $model->no_polisi;
?>
<div class="mobil-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
