<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dormitory_materials".
 *
 * @property string $dormitory_id
 * @property string $dormitory_material_id
 * @property string $dormitory_material_name
 * @property integer $dormitory_material_amount
 * @property integer $dormitory_material_surplus
 * @property string $dormitory_staff_id_name
 * @property integer $dormitory_staff_material_amount
 * @property string $dormitory_note
 */
class DormitoryMaterials extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dormitory_materials';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_material_name', 'dormitory_material_amount', 'dormitory_staff_material_amount'], 'required'],
            [['dormitory_material_amount', 'dormitory_material_surplus', 'dormitory_staff_material_amount'], 'integer'],
            [['dormitory_note'], 'string'],
            [['dormitory_id', 'dormitory_material_id', 'dormitory_staff_id_name'], 'string', 'max' => 30],
            [['dormitory_material_name'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dormitory_id' => Yii::t('common','dormitory_id'),
            'dormitory_material_id' => Yii::t('common','dormitory_material_id'),
            'dormitory_material_name' => Yii::t('common','dormitory_material_name'),
            'dormitory_material_amount' => Yii::t('common','dormitory_material_amount'),
            'dormitory_material_surplus' => Yii::t('common','dormitory_material_surplus'),
            'dormitory_staff_id_name' => Yii::t('common','dormitory_staff_id_name'),
            'dormitory_staff_material_amount' => Yii::t('common','dormitory_staff_material_amount'),
            'dormitory_note' => Yii::t('common','dormitory_note'),
        ];
    }
}
