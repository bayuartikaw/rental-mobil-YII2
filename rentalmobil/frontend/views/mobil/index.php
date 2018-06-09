<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MobilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Mobil';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mobil-index">

    <h1><?= Html::encode($this->title) ?></h1><br>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_polisi',
            'nama_mobil',
            'transmisi',
            'harga_sewa',
            'status',
            [
               'class' => 'yii\grid\ActionColumn',
               'header' => 'Actions',
               'headerOptions' => ['style' => 'color:#337ab7'],
               'template' => '{view}',
               'buttons' => [
                 'view' => function ($url, $model) {
                     return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                 'title' => Yii::t('app', 'lead-view'),
                     ]);
                 },
               ],
               'urlCreator' => function ($action, $model, $key, $index) {
                 if ($action === 'view') {
                     $url ='index.php?r=mobil%2Fview&id='.$model->no_polisi;
                     return $url;
                 }
               }
            ],
        ],
    ]); ?>
</div>
