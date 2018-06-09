<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Home;

/**
 * HomeSearch represents the model behind the search form of `app\models\Home`.
 */
class HomeSearch extends Home
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_home'], 'integer'],
            [['home'], 'safe'],
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
        $query = Home::find();

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
            'id_home' => $this->id_home,
        ]);

        $query->andFilterWhere(['like', 'home', $this->home]);

        return $dataProvider;
    }
}
