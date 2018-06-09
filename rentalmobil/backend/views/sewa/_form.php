<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Sewa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sewa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

      <?php $priceTypes = ArrayHelper::map(\app\models\mobil::find()->orderby('no_polisi')->all(), 'no_polisi', 'no_polisi') ?>

    <?= $form->field($model, 'no_polisi')->dropDownList($priceTypes, ['prompt' => '---- Pilih No Polisi ----'])->label('No Polisi') ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_sewa')->widget(
        DatePicker::className(),[
            'inline' => true,
            'template' => '<div class="well well-sm" style="background-color:#fff;width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-m-d'
            ]
        ]
    ) ?>


    <?= $form->field($model, 'lama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_hrs_kembali')->widget(
        DatePicker::className(),[
            'inline' => true,
            'template' => '<div class="well well-sm" style="background-color:#fff;width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-m-d'
            ]
        ]
    ) ?>


    <?= $form->field($model, 'total_sewa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uang_dp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kekurangan_sewa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Penyewaan Berhasil' => 'Penyewaan Berhasil', 'Penyewaan Belum Berhasil' => 'Penyewaan Belum Berhasil', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
