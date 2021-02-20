<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sp_emergency".
 *
 * @property int $id
 * @property int $sp_id
 * @property int $reason
 * @property int $project_outlet_id
 * @property int $start
 * @property int|null $end
 * @property int|null $status
 * @property int $created_by
 * @property int|null $created_at
 * @property int|null $report_times
 */
class SpEmergency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_emergency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sp_id', 'reason', 'project_outlet_id', 'start', 'created_by'], 'required'],
            [['sp_id', 'reason', 'project_outlet_id', 'start', 'end', 'status', 'created_by', 'created_at', 'report_times'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sp_id' => 'Sp ID',
            'reason' => 'Reason',
            'project_outlet_id' => 'Project Outlet ID',
            'start' => 'Start',
            'end' => 'End',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'report_times' => 'Report Times',
        ];
    }
}
