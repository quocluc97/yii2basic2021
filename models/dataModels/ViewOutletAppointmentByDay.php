<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_outlet_appointment_by_day".
 *
 * @property int|null $project_outlet_id
 * @property int|null $gift_id
 * @property float|null $qty
 * @property int|null $day_num
 */
class ViewOutletAppointmentByDay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_outlet_appointment_by_day';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'gift_id', 'day_num'], 'integer'],
            [['qty'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'project_outlet_id' => 'Project Outlet ID',
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
            'day_num' => 'Day Num',
        ];
    }
}
