<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/avatar04.png', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#"  class="sidebar-form">
            <div class="input-group">
                <input type="text" name="cari" class="form-control" placeholder="Cari...">
                <span class="input-group-btn">
                    <button type="button" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard',
                            'url' => ['/home'], 'active' => $this->context->route == 'site/index'
                        ],

                        [
                          'label' => 'Data Mobil',
                          'icon' => 'fa fa-automobile',
                          'url' => ['/mobil'],
                          'active' => $this->context->route == 'mobil/index',

                        ],

						            [
                            'label' => 'Data Penyewaan',
                            'icon' => 'fa fa-file-o',
                            'url' => ['/sewa'],
                            'active' => $this->context->route == 'sewa/index',
                        ],

						            [
                            'label' => 'Data Pengembalian',
                            'icon' => 'fa fa-download',
                            'url' => ['/pengembalian'],
                            'active' => $this->context->route == 'pengembalian/index',

                        ],

						            [
                            'label' => 'Administrator',
                            'icon' => 'fa fa-users',
                            'url' => ['/admin'],
                            'active' => $this->context->route == 'admin/index',
                        ],

                    ],
                ]
        )
        ?>

    </section>
    <!-- /.sidebar -->
</aside>
