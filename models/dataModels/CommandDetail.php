<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "command_detail".
 *
 * @property int $id
 * @property int $command_id
 * @property int $sku_id
 * @property int $type
 * @property int $qty
 * @property int $status
 *
 * @property Command $command
 */
class CommandDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'command_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['command_id', 'sku_id', 'type', 'qty', 'status'], 'required'],
            [['command_id', 'sku_id', 'type', 'qty', 'status'], 'integer'],
            [['command_id'], 'exist', 'skipOnError' => true, 'targetClass' => Command::className(), 'targetAttribute' => ['command_id' => 'id']],
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
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'status' => 'Status',
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
}
