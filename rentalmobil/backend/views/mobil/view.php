<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Mobil */

$this->title = $model->no_polisi;

?>
<div class="mobil-view">
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->no_polisi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->no_polisi], [
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
