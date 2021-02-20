<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sup_image".
 *
 * @property int $id
 * @property int $sup_id
 * @property int $project_outlet_id
 * @property int|null $status
 * @property int|null $created_at
 */
class SupImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sup_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sup_id', 'project_outlet_id'], 'required'],
            [['sup_id', 'project_outlet_id', 'status', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sup_id' => 'Sup ID',
            'project_outlet_id' => 'Project Outlet ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
