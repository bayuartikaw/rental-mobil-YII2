<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mobil */

$this->title = 'Update Mobil: ' . $model->no_polisi;
$this->params['breadcrumbs'][] = ['label' => 'Mobils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_polisi, 'url' => ['view', 'id' => $model->no_polisi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mobil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
