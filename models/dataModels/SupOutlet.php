<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sup_outlet".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property int $sup_id
 * @property int|null $status
 */
class SupOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sup_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'sup_id'], 'required'],
            [['project_outlet_id', 'sup_id', 'status'], 'integer'],
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
            'sup_id' => 'Sup ID',
            'status' => 'Status',
        ];
    }
}
