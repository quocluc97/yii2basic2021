<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_user_region".
 *
 * @property int|null $user_id
 * @property int|null $province_id
 * @property int|null $region_id
 * @property string|null $name
 * @property string|null $code
 */
class ViewUserRegion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_user_region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'province_id', 'region_id'], 'integer'],
            [['name', 'code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'province_id' => 'Province ID',
            'region_id' => 'Region ID',
            'name' => 'Name',
            'code' => 'Code',
        ];
    }
}
