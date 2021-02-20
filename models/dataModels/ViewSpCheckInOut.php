<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_sp_check_in_out".
 *
 * @property int|null $user_id
 * @property string|null $sp_full_name
 * @property string|null $sp_code
 * @property string|null $day
 * @property int|null $time_in
 * @property float|null $lat_in
 * @property float|null $lng_in
 * @property int|null $image_in_id
 * @property int|null $time_out
 * @property float|null $lat_out
 * @property float|null $lng_out
 * @property int|null $image_out_id
 * @property int|null $channel_id
 * @property string|null $channel_name
 * @property int|null $agency
 * @property int|null $project_outlet_status
 * @property int|null $check_in_out_sp_created_by
 * @property int|null $work_shift
 * @property string|null $user_display_name
 * @property int|null $region_id
 * @property string|null $region_name
 * @property int|null $province_id
 * @property string|null $province_name
 * @property string|null $outlet_name
 * @property int|null $outlet_id
 * @property int|null $project_id
 * @property string|null $image_in_url
 * @property string|null $image_out_url
 * @property string|null $sp_phone
 * @property string|null $sp_image
 * @property int|null $sp_emergency
 * @property int|null $sale_rep_id
 * @property int|null $sale_sup_id
 * @property int|null $kam_id
 */
class ViewSpCheckInOut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_sp_check_in_out';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'time_in', 'image_in_id', 'time_out', 'image_out_id', 'channel_id', 'agency', 'project_outlet_status', 'check_in_out_sp_created_by', 'work_shift', 'region_id', 'province_id', 'outlet_id', 'project_id', 'sp_emergency', 'sale_rep_id', 'sale_sup_id', 'kam_id'], 'integer'],
            [['lat_in', 'lng_in', 'lat_out', 'lng_out'], 'number'],
            [['sp_full_name', 'sp_code', 'channel_name', 'user_display_name', 'region_name', 'province_name', 'outlet_name', 'image_in_url', 'image_out_url', 'sp_image'], 'string', 'max' => 255],
            [['day'], 'string', 'max' => 10],
            [['sp_phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'sp_full_name' => 'Sp Full Name',
            'sp_code' => 'Sp Code',
            'day' => 'Day',
            'time_in' => 'Time In',
            'lat_in' => 'Lat In',
            'lng_in' => 'Lng In',
            'image_in_id' => 'Image In ID',
            'time_out' => 'Time Out',
            'lat_out' => 'Lat Out',
            'lng_out' => 'Lng Out',
            'image_out_id' => 'Image Out ID',
            'channel_id' => 'Channel ID',
            'channel_name' => 'Channel Name',
            'agency' => 'Agency',
            'project_outlet_status' => 'Project Outlet Status',
            'check_in_out_sp_created_by' => 'Check In Out Sp Created By',
            'work_shift' => 'Work Shift',
            'user_display_name' => 'User Display Name',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'outlet_name' => 'Outlet Name',
            'outlet_id' => 'Outlet ID',
            'project_id' => 'Project ID',
            'image_in_url' => 'Image In Url',
            'image_out_url' => 'Image Out Url',
            'sp_phone' => 'Sp Phone',
            'sp_image' => 'Sp Image',
            'sp_emergency' => 'Sp Emergency',
            'sale_rep_id' => 'Sale Rep ID',
            'sale_sup_id' => 'Sale Sup ID',
            'kam_id' => 'Kam ID',
        ];
    }
}
