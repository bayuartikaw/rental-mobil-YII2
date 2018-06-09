<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sewa;

/**
 * SewaSearch represents the model behind the search form of `app\models\Sewa`.
 */
class SewaSearch extends Sewa
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_ktp', 'no_polisi', 'nama', 'alamat', 'pekerjaan', 'telp', 'tgl_sewa', 'lama', 'tgl_hrs_kembali', 'total_sewa', 'uang_dp', 'kekurangan_sewa', 'status','status_pinjam'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Sewa::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'tgl_sewa' => $this->tgl_sewa,
            'tgl_hrs_kembali' => $this->tgl_hrs_kembali,
        ]);

        $query->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'no_polisi', $this->no_polisi])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'telp', $this->telp])
            ->andFilterWhere(['like', 'lama', $this->lama])
            ->andFilterWhere(['like', 'total_sewa', $this->total_sewa])
            ->andFilterWhere(['like', 'uang_dp', $this->uang_dp])
            ->andFilterWhere(['like', 'kekurangan_sewa', $this->kekurangan_sewa])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'status_pinjam', $this->status_pinjam]);

        return $dataProvider;
    }
}
