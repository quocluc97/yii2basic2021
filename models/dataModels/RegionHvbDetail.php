<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "region_hvb_detail".
 *
 * @property int $id
 * @property int $region_hvb_id
 * @property int $province_id
 * @property int $status
 */
class RegionHvbDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_hvb_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_hvb_id', 'province_id', 'status'], 'required'],
            [['region_hvb_id', 'province_id', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_hvb_id' => 'Region Hvb ID',
            'province_id' => 'Province ID',
            'status' => 'Status',
        ];
    }
}
