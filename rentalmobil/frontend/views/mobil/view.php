<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mobil */

$this->title = $model->no_polisi;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Mobil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?php echo $this->title = $model->no_polisi; ?></h1>

<div class="mobil-view">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'no_polisi',
            'nama_mobil',
            'transmisi',
            'harga_sewa',
            'status',
            [
                'attribute' => 'foto',
                'value'=> Yii:: getAlias('@mobilUrl').'/'.$model->foto,
                'format'=>['image',['Width'=>'300','height'=>'170']]

            ]
        ],
    ]) ?>

</div>
