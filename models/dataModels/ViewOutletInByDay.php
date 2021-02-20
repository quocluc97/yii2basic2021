<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_outlet_in_by_day".
 *
 * @property int|null $project_outlet_id
 * @property int|null $gift_id
 * @property int|null $type
 * @property float|null $qty_in
 * @property int|null $day_num
 */
class ViewOutletInByDay extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_outlet_in_by_day';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'gift_id', 'type', 'day_num'], 'integer'],
            [['qty_in'], 'number'],
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
            'type' => 'Type',
            'qty_in' => 'Qty In',
            'day_num' => 'Day Num',
        ];
    }
}
