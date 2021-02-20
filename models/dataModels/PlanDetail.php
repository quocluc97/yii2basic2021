<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "plan_detail".
 *
 * @property int $id
 * @property int $plan_id
 * @property int $sku_id
 * @property int $type
 * @property int $qty
 * @property string|null $phase
 * @property int $receive_at
 * @property int $created_by
 * @property string|null $note
 * @property int $status
 * @property int|null $created_at
 *
 * @property Plan $plan
 */
class PlanDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plan_id', 'sku_id', 'type', 'qty', 'receive_at', 'created_by'], 'required'],
            [['plan_id', 'sku_id', 'type', 'qty', 'receive_at', 'created_by', 'status', 'created_at'], 'integer'],
            [['note'], 'string'],
            [['phase'], 'string', 'max' => 255],
            [['plan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Plan::className(), 'targetAttribute' => ['plan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'plan_id' => 'Plan ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'phase' => 'Phase',
            'receive_at' => 'Receive At',
            'created_by' => 'Created By',
            'note' => 'Note',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Plan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlan()
    {
        return $this->hasOne(Plan::className(), ['id' => 'plan_id']);
    }
}
