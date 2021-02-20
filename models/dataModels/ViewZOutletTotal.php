<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_z_outlet_total".
 *
 * @property int|null $agency_id
 * @property string|null $agency_name
 * @property string|null $region_name
 * @property int|null $region_id
 * @property int|null $province_id
 * @property string|null $province_name
 * @property string|null $warehouse_name
 * @property string|null $outlet_name
 * @property string|null $day
 * @property string|null $gift_name
 * @property int|null $project_outlet_id
 * @property int|null $gift_id
 * @property float|null $qty_in
 * @property float|null $qty_out
 * @property float|null $qty_appoiment
 * @property float|null $qty_debt
 * @property int|null $day_num
 */
class ViewZOutletTotal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_z_outlet_total';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['agency_id', 'region_id', 'province_id', 'project_outlet_id', 'gift_id', 'day_num'], 'integer'],
            [['qty_in', 'qty_out', 'qty_appoiment', 'qty_debt'], 'number'],
            [['agency_name', 'region_name', 'province_name', 'warehouse_name', 'outlet_name', 'gift_name'], 'string', 'max' => 255],
            [['day'], 'string', 'max' => 10],
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
            'region_name' => 'Region Name',
            'region_id' => 'Region ID',
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'warehouse_name' => 'Warehouse Name',
            'outlet_name' => 'Outlet Name',
            'day' => 'Day',
            'gift_name' => 'Gift Name',
            'project_outlet_id' => 'Project Outlet ID',
            'gift_id' => 'Gift ID',
            'qty_in' => 'Qty In',
            'qty_out' => 'Qty Out',
            'qty_appoiment' => 'Qty Appoiment',
            'qty_debt' => 'Qty Debt',
            'day_num' => 'Day Num',
        ];
    }
}
