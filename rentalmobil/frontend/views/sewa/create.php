<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sewa */

$this->title = 'Sewa Mobil';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Sewa Mobil</h1><br>
<div class="sewa-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
