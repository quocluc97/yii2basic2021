<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "back_up_tiger_second_detail".
 *
 * @property int $id
 * @property int $back_up_tiger_second_id
 * @property int $gift_id
 * @property int $qty
 * @property int|null $status
 * @property int $created_at
 */
class BackUpTigerSecondDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'back_up_tiger_second_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['back_up_tiger_second_id', 'gift_id', 'qty', 'created_at'], 'required'],
            [['back_up_tiger_second_id', 'gift_id', 'qty', 'status', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'back_up_tiger_second_id' => 'Back Up Tiger Second ID',
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
