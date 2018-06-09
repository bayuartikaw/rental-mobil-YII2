<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mobil;

/**
 * MobilSearch represents the model behind the search form of `app\models\Mobil`.
 */
class MobilSearch extends Mobil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_polisi', 'nama_mobil', 'transmisi', 'harga_sewa', 'foto', 'status'], 'safe'],
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
        $query = Mobil::find();

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
        $query->andFilterWhere(['like', 'no_polisi', $this->no_polisi])
            ->andFilterWhere(['like', 'nama_mobil', $this->nama_mobil])
            ->andFilterWhere(['like', 'transmisi', $this->transmisi])
            ->andFilterWhere(['like', 'harga_sewa', $this->harga_sewa])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
