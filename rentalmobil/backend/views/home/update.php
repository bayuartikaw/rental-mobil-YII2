<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Home */

$this->title = 'Update Home: ' . $model->id_home;
?>
<div class="home-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
