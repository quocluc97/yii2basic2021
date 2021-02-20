<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "user_province".
 *
 * @property int $id
 * @property int $user_id
 * @property int $province_id
 * @property int|null $status
 * @property int|null $created_at
 */
class UserProvince extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'province_id'], 'required'],
            [['user_id', 'province_id', 'status', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'province_id' => 'Province ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
