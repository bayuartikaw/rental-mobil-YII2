<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SewaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sewa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'no_ktp') ?>

    <?= $form->field($model, 'no_polisi') ?>

    <?= $form->field($model, 'nama') ?>

    <?= $form->field($model, 'alamat') ?>

    <?= $form->field($model, 'pekerjaan') ?>


    <?php // echo $form->field($model, 'telp') ?>

    <?php // echo $form->field($model, 'tgl_sewa') ?>

    <?php // echo $form->field($model, 'lama') ?>

    <?php // echo $form->field($model, 'tgl_hrs_kembali') ?>

    <?php // echo $form->field($model, 'total_sewa') ?>

    <?php // echo $form->field($model, 'uang_dp') ?>

    <?php // echo $form->field($model, 'kekurangan_sewa') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
