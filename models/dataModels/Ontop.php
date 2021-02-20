<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "ontop".
 *
 * @property int $id
 * @property string $code
 * @property int|null $status
 * @property int $begin_time
 * @property int|null $created_by
 * @property int|null $created_at
 * @property int|null $online_sent_time
 * @property int|null $confirm_sent_time
 * @property int|null $confirm_confirm_time
 * @property int|null $done_time
 * @property int $is_field_confirm
 */
class Ontop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ontop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'begin_time'], 'required'],
            [['status', 'begin_time', 'created_by', 'created_at', 'online_sent_time', 'confirm_sent_time', 'confirm_confirm_time', 'done_time', 'is_field_confirm'], 'integer'],
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
            'code' => 'Code',
            'status' => 'Status',
            'begin_time' => 'Begin Time',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'online_sent_time' => 'Online Sent Time',
            'confirm_sent_time' => 'Confirm Sent Time',
            'confirm_confirm_time' => 'Confirm Confirm Time',
            'done_time' => 'Done Time',
            'is_field_confirm' => 'Is Field Confirm',
        ];
    }
}
