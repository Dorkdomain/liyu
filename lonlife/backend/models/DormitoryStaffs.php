<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dormitory_staffs".
 *
 * @property string $dormitory_id
 * @property integer $dormitory_bed_amount
 * @property integer $dormitory_staff_amount
 * @property string $dormitory_room_id
 * @property string $dormitory_staff_id
 * @property string $dormitory_bed_id
 * @property string $dormitory_check_in_date
 * @property string $dormitory_check_out_date
 * @property string $dormitory_note
 */
class DormitoryStaffs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dormitory_staffs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_bed_amount', 'dormitory_staff_amount', 'dormitory_room_id', 'dormitory_staff_id', 'dormitory_bed_id', 'dormitory_check_in_date', 'dormitory_check_out_date'], 'required'],
            [['dormitory_bed_amount', 'dormitory_staff_amount'], 'integer'],
            [['dormitory_check_in_date', 'dormitory_check_out_date'], 'safe'],
            [['dormitory_note'], 'string'],
            [['dormitory_id', 'dormitory_bed_id'], 'string', 'max' => 30],
            [['dormitory_room_id'], 'string', 'max' => 20],
            [['dormitory_staff_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dormitory_id' => Yii::t('common','dormitory_id'),
            'dormitory_bed_amount' => Yii::t('common','dormitory_bed_amount'),
            'dormitory_staff_amount' => Yii::t('common','dormitory_staff_amount'),
            'dormitory_room_id' => Yii::t('common','dormitory_room_id'),
            'dormitory_staff_id' => Yii::t('common','dormitory_staff_id'),
            'dormitory_bed_id' => Yii::t('common','dormitory_bed_id'),
            'dormitory_check_in_date' => Yii::t('common','dormitory_check_in_date'),
            'dormitory_check_out_date' => Yii::t('common','dormitory_check_out_date'),
            'dormitory_note' => Yii::t('common','dormitory_note'),
        ];
    }
}
