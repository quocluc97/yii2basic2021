<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "notification_warehouse".
 *
 * @property int $id
 * @property int $project_id
 * @property int $refer_id
 * @property int $type
 * @property int|null $agency_id
 * @property string $title
 * @property string $body
 * @property int|null $created_by
 * @property int $status
 * @property int|null $is_read
 * @property int|null $is_confirm
 * @property int|null $count
 * @property int $created_at
 * @property int $reception_id
 */
class NotificationWarehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notification_warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'refer_id', 'type', 'title', 'body', 'created_at', 'reception_id'], 'required'],
            [['project_id', 'refer_id', 'type', 'agency_id', 'created_by', 'status', 'is_read', 'is_confirm', 'count', 'created_at', 'reception_id'], 'integer'],
            [['body'], 'string'],
            [['title'], 'string', 'max' => 255],
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
            'refer_id' => 'Refer ID',
            'type' => 'Type',
            'agency_id' => 'Agency ID',
            'title' => 'Title',
            'body' => 'Body',
            'created_by' => 'Created By',
            'status' => 'Status',
            'is_read' => 'Is Read',
            'is_confirm' => 'Is Confirm',
            'count' => 'Count',
            'created_at' => 'Created At',
            'reception_id' => 'Reception ID',
        ];
    }
}
