<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "command_customer_reason".
 *
 * @property int $id
 * @property int $command_id
 * @property string $message
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 *
 * @property Command $command
 * @property User $createdBy
 */
class CommandCustomerReason extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'command_customer_reason';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['command_id', 'message'], 'required'],
            [['command_id', 'status', 'created_at', 'created_by'], 'integer'],
            [['message'], 'string'],
            [['command_id'], 'exist', 'skipOnError' => true, 'targetClass' => Command::className(), 'targetAttribute' => ['command_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
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
            'message' => 'Message',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[Command]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommand()
    {
        return $this->hasOne(Command::className(), ['id' => 'command_id']);
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
