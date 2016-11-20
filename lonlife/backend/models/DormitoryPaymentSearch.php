<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DormitoryPayment;

/**
 * DormitoryPaymentSearch represents the model behind the search form about `backend\models\DormitoryPayment`.
 */
class DormitoryPaymentSearch extends DormitoryPayment
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dormitory_payment_month'], 'integer'],
            [['dormitory_payment_number', 'dormitory_note'], 'safe'],
            [['dormitory_payment_total', 'dormitory_payment_counts'], 'number'],
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
        $query = DormitoryPayment::find();

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
            'id' => $this->id,
            'dormitory_payment_month' => $this->dormitory_payment_month,
            'dormitory_payment_total' => $this->dormitory_payment_total,
            'dormitory_payment_counts' => $this->dormitory_payment_counts,
        ]);

        $query->andFilterWhere(['like', 'dormitory_payment_number', $this->dormitory_payment_number])
            ->andFilterWhere(['like', 'dormitory_note', $this->dormitory_note]);

        return $dataProvider;
    }
}
