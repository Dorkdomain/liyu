<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dormitory_payment".
 *
 * @property integer $id
 * @property string $dormitory_payment_number
 * @property integer $dormitory_payment_month
 * @property double $dormitory_payment_total
 * @property double $dormitory_payment_counts
 * @property string $dormitory_note
 */
class DormitoryPayment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dormitory_payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_payment_number', 'dormitory_payment_month', 'dormitory_payment_total', 'dormitory_payment_counts'], 'required'],
            [['dormitory_payment_month'], 'integer', 'min' => 1, 'max' => 12],
            [['dormitory_payment_total', 'dormitory_payment_counts'], 'number'],
            [['dormitory_note'], 'string'],
            [['dormitory_payment_number'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('common','id'),
            'dormitory_payment_number' => Yii::t('common','dormitory_payment_number'),
            'dormitory_payment_month' => Yii::t('common','dormitory_payment_month'),
            'dormitory_payment_total' => Yii::t('common','dormitory_payment_total'),
            'dormitory_payment_counts' => Yii::t('common','dormitory_payment_counts'),
            'dormitory_note' => Yii::t('common','dormitory_note'),
        ];
    }
}
