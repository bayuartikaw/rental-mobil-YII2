<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SewaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penyewaan';
?>
<br>
<div class="sewa-index">
    <p>
        <?= Html::a('Tambah Sewa', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'no_ktp',
            'no_polisi',
            'nama',
            'telp',
            'tgl_sewa',
            'lama',
            'status',
            'status_pinjam',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
