<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "district".
 *
 * @property int $id
 * @property int|null $province_id
 * @property string|null $name
 * @property int|null $order
 */
class District extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'district';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_id', 'order'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'province_id' => 'Province ID',
            'name' => 'Name',
            'order' => 'Order',
        ];
    }
}
