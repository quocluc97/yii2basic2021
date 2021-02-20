<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "user_outlet".
 *
 * @property int $id
 * @property int $user_id
 * @property int $outlet_id
 * @property int $status
 * @property int|null $created_at
 */
class UserOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'outlet_id'], 'required'],
            [['user_id', 'outlet_id', 'status', 'created_at'], 'integer'],
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
            'outlet_id' => 'Outlet ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
