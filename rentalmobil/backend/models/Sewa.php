<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sewa".
 *
 * @property string $no_ktp
 * @property string $no_polisi
 * @property string $nama
 * @property string $alamat
 * @property string $pekerjaan
 * @property string $telp
 * @property string $tgl_sewa
 * @property string $lama
 * @property string $tgl_hrs_kembali
 * @property string $total_sewa
 * @property string $uang_dp
 * @property string $kekurangan_sewa
 * @property string $status
 *
 * @property Pengembalian[] $pengembalians
 * @property Mobil $noPolisi
 */
class Sewa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sewa';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_ktp'], 'required'],
            [['tgl_sewa', 'tgl_hrs_kembali'], 'safe'],
            [['status'], 'string'],
            [['no_ktp', 'nama', 'total_sewa', 'uang_dp', 'kekurangan_sewa'], 'string', 'max' => 30],
            [['no_polisi', 'lama'], 'string', 'max' => 10],
            [['alamat'], 'string', 'max' => 50],
            [['pekerjaan', 'telp'], 'string', 'max' => 20],
            [['no_ktp'], 'unique'],
            [['no_polisi'], 'exist', 'skipOnError' => true, 'targetClass' => Mobil::className(), 'targetAttribute' => ['no_polisi' => 'no_polisi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_ktp' => 'No Ktp',
            'no_polisi' => 'No Polisi',
            'nama' => 'Nama',
            'alamat' => 'Alamat',
            'pekerjaan' => 'Pekerjaan',
            'telp' => 'Telp',
            'tgl_sewa' => 'Tgl Sewa',
            'lama' => 'Lama',
            'tgl_hrs_kembali' => 'Tgl Hrs Kembali',
            'total_sewa' => 'Total Sewa',
            'uang_dp' => 'Uang Dp',
            'kekurangan_sewa' => 'Kekurangan Sewa',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengembalians()
    {
        return $this->hasMany(Pengembalian::className(), ['no_ktp' => 'no_ktp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNoPolisi()
    {
        return $this->hasOne(Mobil::className(), ['no_polisi' => 'no_polisi']);
    }
}
