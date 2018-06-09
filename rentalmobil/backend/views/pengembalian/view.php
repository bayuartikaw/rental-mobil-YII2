<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Pengembalian */

$this->title = $model->no_ktp;
?>
<div class="pengembalian-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pengembalian], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pengembalian], [
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
            'id_pengembalian',
            'id_sewa',
            'no_ktp',
            'nopol',
            'tgl_kembali',
            'denda',
            'total_bayar',
            'status',

        ],
    ]) ?>

</div>

<?php
  $nopol = $model->nopol;
  $sewa = $model->id_sewa;
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'db_rental');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  $sql = "UPDATE mobil SET status='Tersedia' where no_polisi='$nopol'";
  $sql2 = "UPDATE sewa SET status_pinjam='Dikembalikan' WHERE id_sewa='$sewa'";
  mysqli_query($db,$sql);
  mysqli_query($db,$sql2);
 ?>
