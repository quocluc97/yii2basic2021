<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_agency_region_province".
 *
 * @property int|null $agency_id
 * @property string|null $agency_name
 * @property int|null $region_id
 * @property string|null $region_name
 * @property string|null $province_name
 * @property int|null $province_id
 */
class ViewAgencyRegionProvince extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_agency_region_province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agency_id', 'region_id', 'province_id'], 'integer'],
            [['agency_name', 'region_name', 'province_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'agency_id' => 'Agency ID',
            'agency_name' => 'Agency Name',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'province_name' => 'Province Name',
            'province_id' => 'Province ID',
        ];
    }
}
