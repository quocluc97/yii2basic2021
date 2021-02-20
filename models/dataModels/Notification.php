<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "notification".
 *
 * @property int $id
 * @property int $project_id
 * @property string $title
 * @property string $body
 * @property int $type
 * @property int|null $status
 * @property int $created_by
 * @property int $created_at
 *
 * @property User $createdBy
 * @property NotificationGroup[] $notificationGroups
 */
class Notification extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notification';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'title', 'body', 'created_at'], 'required'],
            [['project_id', 'type', 'status', 'created_by', 'created_at'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255],
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
            'project_id' => 'Project ID',
            'title' => 'Title',
            'body' => 'Body',
            'type' => 'Type',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
        ];
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

    /**
     * Gets query for [[NotificationGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotificationGroups()
    {
        return $this->hasMany(NotificationGroup::className(), ['notification_id' => 'id']);
    }
}
