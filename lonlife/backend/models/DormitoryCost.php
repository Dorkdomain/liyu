<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dormitory_cost".
 *
 * @property string $dormitory_id
 * @property string $dormitory_water_number
 * @property string $dormitory_water_name
 * @property string $dormitory_water_price
 * @property string $dormitory_electric_number
 * @property string $dormitory_electric_name
 * @property string $dormitory_electric_price
 * @property string $dormitory_gas_number
 * @property string $dormitory_gas_name
 * @property string $dormitory_gas_price
 * @property string $dormitory_estate_number
 * @property string $dormitory_estate_name
 * @property string $dormitory_estate_price
 * @property string $dormitory_note
 */
class DormitoryCost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dormitory_cost';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_water_number', 'dormitory_water_name', 'dormitory_water_price', 'dormitory_electric_number', 'dormitory_electric_name', 'dormitory_electric_price', 'dormitory_gas_number', 'dormitory_gas_name', 'dormitory_gas_price', 'dormitory_estate_number', 'dormitory_estate_name', 'dormitory_estate_price'], 'required'],
            [['dormitory_note'], 'string'],
            [['dormitory_id', 'dormitory_water_number', 'dormitory_electric_number', 'dormitory_estate_number'], 'string', 'max' => 30],
            [['dormitory_water_name', 'dormitory_water_price', 'dormitory_electric_name', 'dormitory_electric_price', 'dormitory_gas_number', 'dormitory_gas_name', 'dormitory_gas_price', 'dormitory_estate_name', 'dormitory_estate_price'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dormitory_id' => Yii::t('common','dormitory_id'),
            'dormitory_water_number' => Yii::t('common','dormitory_water_number'),
            'dormitory_water_name' => Yii::t('common','dormitory_water_name'),
            'dormitory_water_price' => Yii::t('common','dormitory_water_price'),
            'dormitory_electric_number' => Yii::t('common','dormitory_electric_number'),
            'dormitory_electric_name' => Yii::t('common','dormitory_electric_name'),
            'dormitory_electric_price' => Yii::t('common','dormitory_electric_price'),
            'dormitory_gas_number' => Yii::t('common','dormitory_gas_number'),
            'dormitory_gas_name' => Yii::t('common','dormitory_gas_name'),
            'dormitory_gas_price' => Yii::t('common','dormitory_gas_price'),
            'dormitory_estate_number' => Yii::t('common','dormitory_estate_number'),
            'dormitory_estate_name' => Yii::t('common','dormitory_estate_name'),
            'dormitory_estate_price' => Yii::t('common','dormitory_estate_price'),
            'dormitory_note' => Yii::t('common','dormitory_note'),
        ];
    }
}
