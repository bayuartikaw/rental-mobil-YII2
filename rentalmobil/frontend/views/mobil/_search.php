<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MobilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_polisi') ?>

    <?= $form->field($model, 'nama_mobil') ?>

    <?= $form->field($model, 'transmisi') ?>

    <?= $form->field($model, 'harga_sewa') ?>

    <?= $form->field($model, 'foto') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
