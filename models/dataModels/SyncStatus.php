<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sync_status".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property int $text_qty
 * @property int $image_qty
 * @property int $status
 * @property int|null $created_at
 */
class SyncStatus extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sync_status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id'], 'required'],
            [['project_outlet_id', 'text_qty', 'image_qty', 'status', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_outlet_id' => 'Project Outlet ID',
            'text_qty' => 'Text Qty',
            'image_qty' => 'Image Qty',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
