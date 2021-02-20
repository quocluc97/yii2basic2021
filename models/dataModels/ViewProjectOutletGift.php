<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_project_outlet_gift".
 *
 * @property int|null $project_outlet_id
 * @property string|null $warehouse_name
 * @property int|null $warehouse_id
 * @property int|null $region_id
 * @property string|null $region_name
 * @property string|null $province_name
 * @property int|null $province_id
 * @property int|null $agency_id
 * @property string|null $agency_name
 * @property string|null $outlet_name
 * @property int|null $outlet_id
 * @property int|null $gift_id
 * @property float|null $qty
 */
class ViewProjectOutletGift extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_project_outlet_gift';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'warehouse_id', 'region_id', 'province_id', 'agency_id', 'outlet_id', 'gift_id'], 'integer'],
            [['qty'], 'number'],
            [['warehouse_name', 'region_name', 'province_name', 'agency_name', 'outlet_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'project_outlet_id' => 'Project Outlet ID',
            'warehouse_name' => 'Warehouse Name',
            'warehouse_id' => 'Warehouse ID',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'province_name' => 'Province Name',
            'province_id' => 'Province ID',
            'agency_id' => 'Agency ID',
            'agency_name' => 'Agency Name',
            'outlet_name' => 'Outlet Name',
            'outlet_id' => 'Outlet ID',
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
        ];
    }
}
