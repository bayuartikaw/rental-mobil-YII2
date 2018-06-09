<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PengembalianSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengembalian-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pengembalian') ?>

    <?= $form->field($model, 'no_ktp') ?>

    <?= $form->field($model, 'nopol') ?>

    <?= $form->field($model, 'tgl_kembali') ?>

    <?= $form->field($model, 'denda') ?>

    <?php // echo $form->field($model, 'total_bayar') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
