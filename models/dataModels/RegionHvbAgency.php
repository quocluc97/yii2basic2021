<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "region_hvb_agency".
 *
 * @property int $id
 * @property int $region_hvb_id
 * @property int $agency_id
 * @property int|null $status
 */
class RegionHvbAgency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_hvb_agency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_hvb_id', 'agency_id'], 'required'],
            [['region_hvb_id', 'agency_id', 'status'], 'integer'],
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
            'agency_id' => 'Agency ID',
            'status' => 'Status',
        ];
    }
}
