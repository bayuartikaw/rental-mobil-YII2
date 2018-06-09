<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mobil".
 *
 * @property string $no_polisi
 * @property string $nama_mobil
 * @property string $transmisi
 * @property string $harga_sewa
 * @property string $foto
 * @property string $status
 *
 * @property Pengembalian[] $pengembalians
 * @property Sewa[] $sewas
 */
class Mobil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mobil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_polisi'], 'required'],
            [['transmisi', 'status'], 'string'],
            [['no_polisi'], 'string', 'max' => 10],
            [['nama_mobil'], 'string', 'max' => 20],
            [['harga_sewa'], 'string', 'max' => 30],
            [['foto'], 'string', 'max' => 100],
            [['no_polisi'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_polisi' => 'No Polisi',
            'nama_mobil' => 'Nama Mobil',
            'transmisi' => 'Transmisi',
            'harga_sewa' => 'Harga Sewa',
            'foto' => 'Foto',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalians()
    {
        return $this->hasMany(Pengembalian::className(), ['nopol' => 'no_polisi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSewas()
    {
        return $this->hasMany(Sewa::className(), ['no_polisi' => 'no_polisi']);
    }
}
