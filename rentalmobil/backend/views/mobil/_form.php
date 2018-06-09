<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Mobil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mobil-form">

    <?php $form = ActiveForm::begin(['options'=> ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'no_polisi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_mobil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transmisi')->dropDownList([ 'Matic' => 'Matic', 'Manual' => 'Manual', ], ['prompt' => '']) ?>
    <?= $form->field($model, 'harga_sewa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Tersedia' => 'Tersedia', 'Di sewa' => 'Di sewa', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
