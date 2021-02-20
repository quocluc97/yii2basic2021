<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_sup_outlet".
 *
 * @property int|null $sup_id
 * @property int|null $outlet_id
 * @property int|null $project_id
 * @property int|null $project_outlet_status
 * @property int|null $sup_outlet_status
 * @property int|null $project_outlet_id
 */
class ViewSupOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_sup_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sup_id', 'outlet_id', 'project_id', 'project_outlet_status', 'sup_outlet_status', 'project_outlet_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sup_id' => 'Sup ID',
            'outlet_id' => 'Outlet ID',
            'project_id' => 'Project ID',
            'project_outlet_status' => 'Project Outlet Status',
            'sup_outlet_status' => 'Sup Outlet Status',
            'project_outlet_id' => 'Project Outlet ID',
        ];
    }
}
