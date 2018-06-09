<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pengembalian".
 *
 * @property int $id_pengembalian
 * @property string $id_sewa
 * @property string $no_ktp
 * @property string $nopol
 * @property string $tgl_kembali
 * @property string $denda
 * @property string $total_bayar
 * @property string $status
 *
 * @property Sewa $noKtp
 * @property Mobil $nopol0
 */
class Pengembalian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengembalian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_kembali'], 'safe'],
            [['status'], 'string'],
            [['no_ktp', 'denda', 'total_bayar'], 'string', 'max' => 30],
            [['nopol'], 'string', 'max' => 10],
            [['id_sewa'], 'exist', 'skipOnError' => true, 'targetClass' => Sewa::className(), 'targetAttribute' => ['id_sewa' => 'id_sewa']],
            [['no_ktp'], 'exist', 'skipOnError' => true, 'targetClass' => Sewa::className(), 'targetAttribute' => ['no_ktp' => 'no_ktp']],
            [['nopol'], 'exist', 'skipOnError' => true, 'targetClass' => Mobil::className(), 'targetAttribute' => ['nopol' => 'no_polisi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pengembalian' => 'Id Pengembalian',
            'id_sewa' => 'ID Sewa',
            'no_ktp' => 'No Ktp',
            'nopol' => 'Nopol',
            'tgl_kembali' => 'Tgl Kembali',
            'denda' => 'Denda',
            'total_bayar' => 'Total Bayar',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoKtp()
    {
        return $this->hasOne(Sewa::className(), ['no_ktp' => 'no_ktp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNopol()
    {
        return $this->hasOne(Mobil::className(), ['no_polisi' => 'nopol']);
    }
}
