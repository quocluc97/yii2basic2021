<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "transitory_detail".
 *
 * @property int $id
 * @property int $transitory_id
 * @property int $sku_id
 * @property int $type
 * @property int $qty
 * @property int $status
 */
class TransitoryDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transitory_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transitory_id', 'sku_id', 'type', 'qty', 'status'], 'required'],
            [['transitory_id', 'sku_id', 'type', 'qty', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transitory_id' => 'Transitory ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'status' => 'Status',
        ];
    }
}
