<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "receipt".
 *
 * @property int $id
 * @property int $command_id
 * @property int $type 1: phieu nhap; 2: phieu xuat
 * @property string|null $code
 * @property int|null $receipt_out_id
 * @property bool $is_incomplete
 * @property int $status
 * @property int|null $created_at
 * @property string|null $message
 * @property int|null $created_by
 */
class Receipt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receipt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['command_id', 'type'], 'required'],
            [['command_id', 'type', 'receipt_out_id', 'status', 'created_at', 'created_by'], 'integer'],
            [['is_incomplete'], 'boolean'],
            [['message'], 'string'],
            [['code'], 'string', 'max' => 255],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'command_id' => 'Command ID',
            'type' => 'Type',
            'code' => 'Code',
            'receipt_out_id' => 'Receipt Out ID',
            'is_incomplete' => 'Is Incomplete',
            'status' => 'Status',
            'created_at' => 'Created At',
            'message' => 'Message',
            'created_by' => 'Created By',
        ];
    }
}
