<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pengembalian;

/**
 * PengembalianSearch represents the model behind the search form of `app\models\Pengembalian`.
 */
class PengembalianSearch extends Pengembalian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pengembalian'], 'integer'],
            [['no_ktp', 'nopol', 'tgl_kembali', 'denda', 'total_bayar', 'status'], 'safe'],
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
        $query = Pengembalian::find();

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
            'id_pengembalian' => $this->id_pengembalian,
            'tgl_kembali' => $this->tgl_kembali,
        ]);

        $query->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'nopol', $this->nopol])
            ->andFilterWhere(['like', 'denda', $this->denda])
            ->andFilterWhere(['like', 'total_bayar', $this->total_bayar])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
