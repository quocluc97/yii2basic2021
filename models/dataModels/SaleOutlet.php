<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sale_outlet".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property int $sale_id
 * @property int $status
 * @property int|null $created_at
 */
class SaleOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sale_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'sale_id'], 'required'],
            [['project_outlet_id', 'sale_id', 'status', 'created_at'], 'integer'],
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
            'sale_id' => 'Sale ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
