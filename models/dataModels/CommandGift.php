<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "command_gift".
 *
 * @property int $id
 * @property int $command_id
 * @property int $project_outlet_id
 * @property int $status
 * @property int|null $created_at
 * @property int|null $received_at Thoi gian nhan tai outlet
 * @property int|null $user_receive_id user nhan
 *
 * @property Command $command
 * @property User $userReceive
 * @property ProjectOutlet $projectOutlet
 */
class CommandGift extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'command_gift';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['command_id', 'project_outlet_id'], 'required'],
            [['command_id', 'project_outlet_id', 'status', 'created_at', 'received_at', 'user_receive_id'], 'integer'],
            [['command_id'], 'exist', 'skipOnError' => true, 'targetClass' => Command::className(), 'targetAttribute' => ['command_id' => 'id']],
            [['user_receive_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_receive_id' => 'id']],
            [['project_outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectOutlet::className(), 'targetAttribute' => ['project_outlet_id' => 'id']],
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
            'project_outlet_id' => 'Project Outlet ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'received_at' => 'Received At',
            'user_receive_id' => 'User Receive ID',
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
     * Gets query for [[UserReceive]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUserReceive()
    {
        return $this->hasOne(User::className(), ['id' => 'user_receive_id']);
    }

    /**
     * Gets query for [[ProjectOutlet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOutlet()
    {
        return $this->hasOne(ProjectOutlet::className(), ['id' => 'project_outlet_id']);
    }
}
