<?php
use yii\helpers\Html;
?>
<header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><?=$title?></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">
            <b>Ascen</b>
            <small>
              RentCar
            </small>
          </span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
					<?= Html::img('@web/img/avatar04.png', ['class' => 'user-image', 'alt'=>'User Image']) ?>
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <div class="container">
                    <h2 style="color:#605CA8;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ascen RentCar</b>
                  </div>
                  <br>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="http://localhost/rentalmobil/admin/" class="btn btn-primary">Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
