<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_warehouse".
 *
 * @property int $warehouse_id
 * @property string $warehouse_name
 * @property int|null $province_id
 * @property string|null $province_name
 * @property int|null $agency_id
 * @property int $number_outlet
 */
class ViewWarehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['warehouse_id', 'province_id', 'agency_id', 'number_outlet'], 'integer'],
            [['warehouse_name'], 'required'],
            [['warehouse_name', 'province_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'warehouse_id' => 'Warehouse ID',
            'warehouse_name' => 'Warehouse Name',
            'province_id' => 'Province ID',
            'province_name' => 'Province Name',
            'agency_id' => 'Agency ID',
            'number_outlet' => 'Number Outlet',
        ];
    }
}
