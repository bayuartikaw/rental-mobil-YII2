<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sewa */

$this->title = $model->id_sewa;
$this->title = 'Sewa Mobil';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Detail Penyewaan</h1><br>
<div class="sewa-view">

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
        ],
    ]) ?>

</div>
<p style="color:black;">*Proses penyewaan mobil anda telah berhasil. <br>*Silahkan kunjungi tempat penyewaan kami untuk mengambil mobil serta verifikasi data dan proses pembayaran.
<br>*Apabila dalam kurun waktu 3 jam anda tidak datang, penyewaan mobil dibatalkan.
</p>

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
