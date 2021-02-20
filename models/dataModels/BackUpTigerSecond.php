<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "back_up_tiger_second".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property int|null $status
 * @property int $created_at
 */
class BackUpTigerSecond extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'back_up_tiger_second';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'created_at'], 'required'],
            [['project_outlet_id', 'status', 'created_at'], 'integer'],
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
        ];
    }
}
