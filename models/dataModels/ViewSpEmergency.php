<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_sp_emergency".
 *
 * @property string|null $region_name
 * @property string|null $province_name
 * @property string|null $day
 * @property int|null $work_shift
 * @property string|null $outlet_name
 * @property string|null $sp_code
 * @property int|null $start
 * @property int|null $end
 * @property int|null $reason
 * @property int|null $created_at
 * @property int|null $region_id
 * @property int|null $province_id
 * @property int|null $outlet_id
 * @property int|null $report_times
 * @property int|null $sp_emergency_id
 */
class ViewSpEmergency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_sp_emergency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['work_shift', 'start', 'end', 'reason', 'created_at', 'region_id', 'province_id', 'outlet_id', 'report_times', 'sp_emergency_id'], 'integer'],
            [['region_name', 'province_name', 'outlet_name', 'sp_code'], 'string', 'max' => 255],
            [['day'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'region_name' => 'Region Name',
            'province_name' => 'Province Name',
            'day' => 'Day',
            'work_shift' => 'Work Shift',
            'outlet_name' => 'Outlet Name',
            'sp_code' => 'Sp Code',
            'start' => 'Start',
            'end' => 'End',
            'reason' => 'Reason',
            'created_at' => 'Created At',
            'region_id' => 'Region ID',
            'province_id' => 'Province ID',
            'outlet_id' => 'Outlet ID',
            'report_times' => 'Report Times',
            'sp_emergency_id' => 'Sp Emergency ID',
        ];
    }
}
