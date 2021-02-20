<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "project_sup".
 *
 * @property int $id
 * @property int $project_id
 * @property int $sup_id
 * @property int $agency_id
 * @property int $status
 * @property int|null $created_at
 */
class ProjectSup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_sup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'sup_id', 'agency_id'], 'required'],
            [['project_id', 'sup_id', 'agency_id', 'status', 'created_at'], 'integer'],
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
            'sup_id' => 'Sup ID',
            'agency_id' => 'Agency ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
