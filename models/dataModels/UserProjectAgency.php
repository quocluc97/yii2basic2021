<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "user_project_agency".
 *
 * @property int $id
 * @property int $user_id
 * @property int $project_id
 * @property int $agency_id
 * @property int $status
 * @property int|null $created_at
 */
class UserProjectAgency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_project_agency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'project_id', 'agency_id'], 'required'],
            [['user_id', 'project_id', 'agency_id', 'status', 'created_at'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'project_id' => 'Project ID',
            'agency_id' => 'Agency ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
