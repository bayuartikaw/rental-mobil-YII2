<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'db_rental');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  $nopol = mysqli_real_escape_string($db,$_POST['np']);
  $sql = "UPDATE mobil SET status='Di sewa' where no_polisi='$nopol'";
  mysqli_query($db,$sql);
 ?>
