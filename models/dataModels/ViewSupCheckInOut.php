<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_sup_check_in_out".
 *
 * @property string|null $name
 * @property string|null $code
 * @property int|null $check_in_out_sup_id
 * @property float|null $lat_in
 * @property float|null $lng_in
 * @property float|null $lat_out
 * @property float|null $lng_out
 * @property int|null $project_id
 * @property int|null $sup_id
 * @property int|null $check_in_out_sup_created_at
 * @property int|null $outlet_id
 * @property int|null $time_in
 * @property int|null $time_out
 * @property int|null $region_id
 */
class ViewSupCheckInOut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_sup_check_in_out';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['check_in_out_sup_id', 'project_id', 'sup_id', 'check_in_out_sup_created_at', 'outlet_id', 'time_in', 'time_out', 'region_id'], 'integer'],
            [['lat_in', 'lng_in', 'lat_out', 'lng_out'], 'number'],
            [['name', 'code'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'code' => 'Code',
            'check_in_out_sup_id' => 'Check In Out Sup ID',
            'lat_in' => 'Lat In',
            'lng_in' => 'Lng In',
            'lat_out' => 'Lat Out',
            'lng_out' => 'Lng Out',
            'project_id' => 'Project ID',
            'sup_id' => 'Sup ID',
            'check_in_out_sup_created_at' => 'Check In Out Sup Created At',
            'outlet_id' => 'Outlet ID',
            'time_in' => 'Time In',
            'time_out' => 'Time Out',
            'region_id' => 'Region ID',
        ];
    }
}
