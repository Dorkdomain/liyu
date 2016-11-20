<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DormitoryBasicInformation;

/**
 * DormitoryBasicInformationSearch represents the model behind the search form about `backend\models\DormitoryBasicInformation`.
 */
class DormitoryBasicInformationSearch extends DormitoryBasicInformation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_name', 'dormitory_site', 'dormitory_rent', 'dormitory_mode_of_payment', 'dormitory_note_of_rent', 'dormitory_warn_of_rent', 'dormitory_accounts_of_rent', 'dormitory_name_of_accounts', 'dormitory_name_of_landlord', 'dormitory_number_of_landlord', 'dormitory_note_of_landlord', 'dormitory_leader_name', 'dormitory_leader_number', 'dormitory_estate_number', 'dormitory_note'], 'safe'],
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
        $query = DormitoryBasicInformation::find();

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
            ->andFilterWhere(['like', 'dormitory_name', $this->dormitory_name])
            ->andFilterWhere(['like', 'dormitory_site', $this->dormitory_site])
            ->andFilterWhere(['like', 'dormitory_rent', $this->dormitory_rent])
            ->andFilterWhere(['like', 'dormitory_mode_of_payment', $this->dormitory_mode_of_payment])
            ->andFilterWhere(['like', 'dormitory_note_of_rent', $this->dormitory_note_of_rent])
            ->andFilterWhere(['like', 'dormitory_warn_of_rent', $this->dormitory_warn_of_rent])
            ->andFilterWhere(['like', 'dormitory_accounts_of_rent', $this->dormitory_accounts_of_rent])
            ->andFilterWhere(['like', 'dormitory_name_of_accounts', $this->dormitory_name_of_accounts])
            ->andFilterWhere(['like', 'dormitory_name_of_landlord', $this->dormitory_name_of_landlord])
            ->andFilterWhere(['like', 'dormitory_number_of_landlord', $this->dormitory_number_of_landlord])
            ->andFilterWhere(['like', 'dormitory_note_of_landlord', $this->dormitory_note_of_landlord])
            ->andFilterWhere(['like', 'dormitory_leader_name', $this->dormitory_leader_name])
            ->andFilterWhere(['like', 'dormitory_leader_number', $this->dormitory_leader_number])
            ->andFilterWhere(['like', 'dormitory_estate_number', $this->dormitory_estate_number])
            ->andFilterWhere(['like', 'dormitory_note', $this->dormitory_note]);

        return $dataProvider;
    }
}
