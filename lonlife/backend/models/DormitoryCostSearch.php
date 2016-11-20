<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DormitoryCost;

/**
 * DormitoryCostSearch represents the model behind the search form about `backend\models\DormitoryCost`.
 */
class DormitoryCostSearch extends DormitoryCost
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_water_number', 'dormitory_water_name', 'dormitory_water_price', 'dormitory_electric_number', 'dormitory_electric_name', 'dormitory_electric_price', 'dormitory_gas_number', 'dormitory_gas_name', 'dormitory_gas_price', 'dormitory_estate_number', 'dormitory_estate_name', 'dormitory_estate_price', 'dormitory_note'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = DormitoryCost::find();

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
        $query->andFilterWhere(['like', 'dormitory_id', $this->dormitory_id])
            ->andFilterWhere(['like', 'dormitory_water_number', $this->dormitory_water_number])
            ->andFilterWhere(['like', 'dormitory_water_name', $this->dormitory_water_name])
            ->andFilterWhere(['like', 'dormitory_water_price', $this->dormitory_water_price])
            ->andFilterWhere(['like', 'dormitory_electric_number', $this->dormitory_electric_number])
            ->andFilterWhere(['like', 'dormitory_electric_name', $this->dormitory_electric_name])
            ->andFilterWhere(['like', 'dormitory_electric_price', $this->dormitory_electric_price])
            ->andFilterWhere(['like', 'dormitory_gas_number', $this->dormitory_gas_number])
            ->andFilterWhere(['like', 'dormitory_gas_name', $this->dormitory_gas_name])
            ->andFilterWhere(['like', 'dormitory_gas_price', $this->dormitory_gas_price])
            ->andFilterWhere(['like', 'dormitory_estate_number', $this->dormitory_estate_number])
            ->andFilterWhere(['like', 'dormitory_estate_name', $this->dormitory_estate_name])
            ->andFilterWhere(['like', 'dormitory_estate_price', $this->dormitory_estate_price])
            ->andFilterWhere(['like', 'dormitory_note', $this->dormitory_note]);

        return $dataProvider;
    }
}
