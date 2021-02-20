<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_first_stock".
 *
 * @property int|null $project_id
 * @property int|null $warehouse_id
 * @property int|null $sku_id
 * @property int|null $type
 * @property float|null $qty
 * @property int|null $region_id
 * @property int|null $agency_id
 */
class ViewFirstStock extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_first_stock';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'warehouse_id', 'sku_id', 'type', 'region_id', 'agency_id'], 'integer'],
            [['qty'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'warehouse_id' => 'Warehouse ID',
            'sku_id' => 'Sku ID',
            'type' => 'Type',
            'qty' => 'Qty',
            'region_id' => 'Region ID',
            'agency_id' => 'Agency ID',
        ];
    }
}
