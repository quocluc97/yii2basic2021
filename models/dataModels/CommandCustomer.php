<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "command_customer".
 *
 * @property int $id
 * @property int $command_id
 * @property int $customer_id
 * @property int $receive_at
 * @property int|null $received_at
 * @property int $status
 * @property int|null $created_at
 *
 * @property Command $command
 * @property Customer $customer
 */
class CommandCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'command_customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['command_id', 'customer_id', 'receive_at'], 'required'],
            [['command_id', 'customer_id', 'receive_at', 'received_at', 'status', 'created_at'], 'integer'],
            [['command_id'], 'exist', 'skipOnError' => true, 'targetClass' => Command::className(), 'targetAttribute' => ['command_id' => 'id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
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
            'customer_id' => 'Customer ID',
            'receive_at' => 'Receive At',
            'received_at' => 'Received At',
            'status' => 'Status',
            'created_at' => 'Created At',
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
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }
}
