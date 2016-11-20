<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DormitoryStaffs;

/**
 * DormitoryStaffsSearch represents the model behind the search form about `backend\models\DormitoryStaffs`.
 */
class DormitoryStaffsSearch extends DormitoryStaffs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_room_id', 'dormitory_staff_id', 'dormitory_bed_id', 'dormitory_check_in_date', 'dormitory_check_out_date', 'dormitory_note'], 'safe'],
            [['dormitory_bed_amount', 'dormitory_staff_amount'], 'integer'],
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
        $query = DormitoryStaffs::find();

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
            'dormitory_bed_amount' => $this->dormitory_bed_amount,
            'dormitory_staff_amount' => $this->dormitory_staff_amount,
            'dormitory_check_in_date' => $this->dormitory_check_in_date,
            'dormitory_check_out_date' => $this->dormitory_check_out_date,
        ]);

        $query->andFilterWhere(['like', 'dormitory_id', $this->dormitory_id])
            ->andFilterWhere(['like', 'dormitory_room_id', $this->dormitory_room_id])
            ->andFilterWhere(['like', 'dormitory_staff_id', $this->dormitory_staff_id])
            ->andFilterWhere(['like', 'dormitory_bed_id', $this->dormitory_bed_id])
            ->andFilterWhere(['like', 'dormitory_note', $this->dormitory_note]);

        return $dataProvider;
    }
}
