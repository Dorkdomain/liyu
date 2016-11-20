<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "dormitory_basic_information".
 *
 * @property string $dormitory_id
 * @property string $dormitory_name
 * @property string $dormitory_site
 * @property string $dormitory_rent
 * @property string $dormitory_mode_of_payment
 * @property string $dormitory_note_of_rent
 * @property string $dormitory_warn_of_rent
 * @property string $dormitory_accounts_of_rent
 * @property string $dormitory_name_of_accounts
 * @property string $dormitory_name_of_landlord
 * @property string $dormitory_number_of_landlord
 * @property string $dormitory_note_of_landlord
 * @property string $dormitory_leader_name
 * @property string $dormitory_leader_number
 * @property string $dormitory_estate_number
 * @property string $dormitory_note
 */
class DormitoryBasicInformation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dormitory_basic_information';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dormitory_id', 'dormitory_name', 'dormitory_site', 'dormitory_rent', 'dormitory_mode_of_payment', 'dormitory_accounts_of_rent', 'dormitory_name_of_landlord', 'dormitory_number_of_landlord', 'dormitory_leader_name', 'dormitory_leader_number', 'dormitory_estate_number'], 'required'],
            [['dormitory_note_of_rent', 'dormitory_note_of_landlord', 'dormitory_note'], 'string'],
            [['dormitory_id', 'dormitory_name', 'dormitory_warn_of_rent'], 'string', 'max' => 30],
            [['dormitory_site'], 'string', 'max' => 50],
            [['dormitory_rent', 'dormitory_mode_of_payment', 'dormitory_name_of_accounts', 'dormitory_number_of_landlord', 'dormitory_leader_number', 'dormitory_estate_number'], 'string', 'max' => 20],
            [['dormitory_accounts_of_rent'], 'string', 'max' => 19],
            [['dormitory_name_of_landlord', 'dormitory_leader_name'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dormitory_id' => Yii::t('common', 'dormitory_id'),
            'dormitory_name' => Yii::t('common', 'dormitory_name'),
            'dormitory_site' => Yii::t('common', 'dormitory_site'),
            'dormitory_rent' => Yii::t('common', 'dormitory_rent'),
            'dormitory_mode_of_payment' => Yii::t('common', 'dormitory_mode_of_payment'),
            'dormitory_note_of_rent' => Yii::t('common', 'dormitory_note_of_rent'),
            'dormitory_warn_of_rent' => Yii::t('common', 'dormitory_warn_of_rent'),
            'dormitory_accounts_of_rent' => Yii::t('common', 'dormitory_accounts_of_rent'),
            'dormitory_name_of_accounts' => Yii::t('common', 'dormitory_name_of_accounts'),
            'dormitory_name_of_landlord' => Yii::t('common', 'dormitory_name_of_landlord'),
            'dormitory_number_of_landlord' => Yii::t('common', 'dormitory_number_of_landlord'),
            'dormitory_note_of_landlord' => Yii::t('common', 'dormitory_note_of_landlord'),
            'dormitory_leader_name' => Yii::t('common', 'dormitory_leader_name'),
            'dormitory_leader_number' => Yii::t('common', 'dormitory_leader_number'),
            'dormitory_estate_number' => Yii::t('common', 'dormitory_estate_number'),
            'dormitory_note' => Yii::t('common', 'dormitory_note'),
        ];
    }
}
