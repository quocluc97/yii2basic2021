<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_appointment_debt".
 *
 * @property int|null $project_outlet_id
 * @property int|null $gift_id
 * @property float|null $qty_appoiment
 * @property float|null $qty_debt
 * @property int|null $day_num
 */
class ViewAppointmentDebt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_appointment_debt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'gift_id', 'day_num'], 'integer'],
            [['qty_appoiment', 'qty_debt'], 'number'],
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
            'qty_appoiment' => 'Qty Appoiment',
            'qty_debt' => 'Qty Debt',
            'day_num' => 'Day Num',
        ];
    }
}
