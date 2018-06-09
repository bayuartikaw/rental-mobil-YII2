<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Sewa */
/* @var $form yii\widgets\ActiveForm */
?>
<form class="" action="" method="post">
  <div class="sewa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true,'required']) ?>

    <?php $priceTypes = ArrayHelper::map(\app\models\mobil::find()->where(['status'=>'Tersedia'])->all(), 'no_polisi', 'no_polisi') ?>

    <?= $form->field($model, 'no_polisi')->dropDownList($priceTypes, ['prompt' => '---- Pilih No Polisi ----','onchange'=>'document.getElementById(\'np\').value=this.options[this.selectedIndex].text'])->label('No Polisi') ?>
    <?= $form->field($model, '.')->textInput(['maxlength' => true,'type'=>'hidden','name'=>'np', 'id'=>'np','value'=>'' ]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true,]) ?>

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
      <?= $form->field($model, 'lama')->textInput(['maxlength' => true]);?>
      <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary']) ?>

      </div>
  </div>
</form>
<script>
  function update(np)
  {
      jQuery.ajax({
       type: "POST",
       url: "../models/updatemobil.php",
       data: 'np='+np,
       cache: true,
       success: function(response)
       {
       }
     });
 }
</script>
<?php ActiveForm::end(); ?>
