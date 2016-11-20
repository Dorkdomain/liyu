<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DormitoryMaterials;

/**
 * DormitoryMaterialsSearch represents the model behind the search form about `backend\models\DormitoryMaterials`.
 */
class DormitoryMaterialsSearch extends DormitoryMaterials
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_material_id', 'dormitory_material_name', 'dormitory_staff_id_name', 'dormitory_note'], 'safe'],
            [['dormitory_material_amount', 'dormitory_material_surplus', 'dormitory_staff_material_amount'], 'integer'],
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
        $query = DormitoryMaterials::find();

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
            'dormitory_material_amount' => $this->dormitory_material_amount,
            'dormitory_material_surplus' => $this->dormitory_material_surplus,
            'dormitory_staff_amount' => $this->dormitory_staff_material_amount,
        ]);

        $query->andFilterWhere(['like', 'dormitory_id', $this->dormitory_id])
            ->andFilterWhere(['like', 'dormitory_material_id', $this->dormitory_material_id])
            ->andFilterWhere(['like', 'dormitory_material_name', $this->dormitory_material_name])
            ->andFilterWhere(['like', 'dormitory_staff_id_name', $this->dormitory_staff_id_name])
            ->andFilterWhere(['like', 'dormitory_note', $this->dormitory_note]);

        return $dataProvider;
    }
}
