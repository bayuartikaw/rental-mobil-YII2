<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HomeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Dashboard';
?>
<br>
<div>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</div>

<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'db_rental');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  $sql = "select count(no_polisi) from mobil";
  $sql2 = "select count(id_sewa) from sewa where status_pinjam='Belum Dikembalikan'";
  $sql3 = "select count(id_pengembalian) from pengembalian";
  $sql4 = "select count(no_polisi) from mobil where status='Tersedia'";
  $result1 = mysqli_query($db,$sql);
  $result2 = mysqli_query($db,$sql2);
  $result3 = mysqli_query($db,$sql3);
  $result4 = mysqli_query($db,$sql4);
  $data1 = mysqli_fetch_array($result1);
  $data2 = mysqli_fetch_array($result2);
  $data3 = mysqli_fetch_array($result3);
  $data4 = mysqli_fetch_array($result4);
 ?>

<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3><?php echo $data1[0]; ?></h3>
        <p>Data Mobil</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3><?php echo $data2[0]; ?></h3>
        <p>Penyewaan</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3><?php echo $data3[0]; ?></h3>

        <p>Pengembalian</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3><?php echo $data4[0]; ?></h3>

        <p>Mobil Tersedia</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">Lihat detail <i class="fa fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
</div>
