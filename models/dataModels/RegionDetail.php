<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "region_detail".
 *
 * @property int $id
 * @property int $region_id
 * @property int $province_id
 */
class RegionDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'province_id'], 'required'],
            [['region_id', 'province_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_id' => 'Region ID',
            'province_id' => 'Province ID',
        ];
    }
}
