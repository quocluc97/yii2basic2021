<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_user_outlet_login".
 *
 * @property int|null $outlet_id
 * @property bool|null $is_login
 * @property int|null $user_status
 * @property int|null $user_outlet_status
 * @property int|null $id
 * @property string|null $username
 * @property string|null $display_name
 */
class ViewUserOutletLogin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_user_outlet_login';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['outlet_id', 'user_status', 'user_outlet_status', 'id'], 'integer'],
            [['is_login'], 'boolean'],
            [['username', 'display_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'outlet_id' => 'Outlet ID',
            'is_login' => 'Is Login',
            'user_status' => 'User Status',
            'user_outlet_status' => 'User Outlet Status',
            'id' => 'ID',
            'username' => 'Username',
            'display_name' => 'Display Name',
        ];
    }
}
