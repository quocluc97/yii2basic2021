<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "project_sp".
 *
 * @property int $id
 * @property int $project_id
 * @property int $sp_id
 * @property int $agency
 * @property int $status
 * @property int|null $created_at
 */
class ProjectSp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_sp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'sp_id', 'agency'], 'required'],
            [['project_id', 'sp_id', 'agency', 'status', 'created_at'], 'integer'],
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
            'sp_id' => 'Sp ID',
            'agency' => 'Agency',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
