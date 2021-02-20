<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "street".
 *
 * @property int $id
 * @property int|null $province_id
 * @property int|null $district_id
 * @property string|null $name
 * @property string|null $prefix
 */
class Street extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'street';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['province_id', 'district_id'], 'integer'],
            [['name', 'prefix'], 'string', 'max' => 255],
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
            'district_id' => 'District ID',
            'name' => 'Name',
            'prefix' => 'Prefix',
        ];
    }
}
