<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "gift_store".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property int|null $status
 * @property int $created_at
 * @property int $created_by
 * @property int $index
 */
class GiftStore extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gift_store';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'created_at', 'created_by', 'index'], 'required'],
            [['project_outlet_id', 'status', 'created_at', 'created_by', 'index'], 'integer'],
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
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'index' => 'Index',
        ];
    }
}
