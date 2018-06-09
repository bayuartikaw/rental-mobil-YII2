<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Pengembalian */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengembalian-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php $priceTypes = ArrayHelper::map(\app\models\sewa::find()->where(['status_pinjam'=>'Belum Dikembalikan'])->all(), 'id_sewa', 'id_sewa') ?>
    <?= $form->field($model, 'id_sewa')->dropDownList($priceTypes, ['prompt' => '---- Pilih ID Sewa ----'])->label('ID Sewa') ?>

    <?php $priceTypes = ArrayHelper::map(\app\models\sewa::find()->orderBy('no_ktp')->all(), 'no_ktp', 'no_ktp') ?>
    <?= $form->field($model, 'no_ktp')->dropDownList($priceTypes, ['prompt' => '---- Pilih No KTP ----'])->label('No KTP') ?>


    <?php $priceTypes = ArrayHelper::map(\app\models\mobil::find()->where(['status'=>'Di sewa'])->all(), 'no_polisi', 'no_polisi') ?>
    <?= $form->field($model, 'nopol')->dropDownList($priceTypes, ['prompt' => '---- Pilih No Polisi ----'])->label('No Polisi') ?>



    <?= $form->field($model, 'tgl_kembali')->widget(
        DatePicker::className(),[
            'inline' => true,
            'template' => '<div class="well well-sm" style="background-color:#fff;width:250px">{input}</div>',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-m-d'
            ]
        ]
    ) ?>


    <?= $form->field($model, 'denda')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_bayar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Lunas' => 'Lunas', 'Belum lunas' => 'Belum lunas', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
