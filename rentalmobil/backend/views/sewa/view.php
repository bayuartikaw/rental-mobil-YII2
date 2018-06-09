<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sewa */

$this->title = $model->no_ktp;
?>
<div class="sewa-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_sewa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_sewa], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            'no_ktp',
            'no_polisi',
            'nama',
            'alamat',
            'pekerjaan',
            'telp',
            'tgl_sewa',
            'lama',
            'tgl_hrs_kembali',
            'total_sewa',
            'uang_dp',
            'kekurangan_sewa',
            'status',
            'status_pinjam',
        ],
    ]) ?>

</div>
<?php
  $nopol = $model->no_polisi;
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'db_rental');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  $sql = "UPDATE mobil SET status='Di sewa' where no_polisi='$nopol'";
  mysqli_query($db,$sql);
 ?>
