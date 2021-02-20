<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "notification_group".
 *
 * @property int $id
 * @property int $notification_id
 * @property int $outlet_id
 * @property int $status
 *
 * @property Notification $notification
 * @property Outlet $outlet
 */
class NotificationGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notification_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['notification_id', 'outlet_id'], 'required'],
            [['notification_id', 'outlet_id', 'status'], 'integer'],
            [['notification_id'], 'exist', 'skipOnError' => true, 'targetClass' => Notification::className(), 'targetAttribute' => ['notification_id' => 'id']],
            [['outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Outlet::className(), 'targetAttribute' => ['outlet_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'notification_id' => 'Notification ID',
            'outlet_id' => 'Outlet ID',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Notification]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotification()
    {
        return $this->hasOne(Notification::className(), ['id' => 'notification_id']);
    }

    /**
     * Gets query for [[Outlet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutlet()
    {
        return $this->hasOne(Outlet::className(), ['id' => 'outlet_id']);
    }
}
