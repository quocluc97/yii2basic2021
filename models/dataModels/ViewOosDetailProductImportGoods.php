<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_oos_detail_product_import_goods".
 *
 * @property int|null $outlet_id
 * @property int|null $oos_id
 * @property int|null $oos_type
 * @property int|null $product_id
 * @property int|null $qty
 * @property string|null $image
 * @property string|null $name
 * @property int|null $brand_id
 * @property int|null $project_outlet_id
 * @property int|null $oos_created_at
 * @property float|null $is_yellow
 * @property float|null $is_red
 */
class ViewOosDetailProductImportGoods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_oos_detail_product_import_goods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['outlet_id', 'oos_id', 'oos_type', 'product_id', 'qty', 'brand_id', 'project_outlet_id', 'oos_created_at'], 'integer'],
            [['is_yellow', 'is_red'], 'number'],
            [['image', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'outlet_id' => 'Outlet ID',
            'oos_id' => 'Oos ID',
            'oos_type' => 'Oos Type',
            'product_id' => 'Product ID',
            'qty' => 'Qty',
            'image' => 'Image',
            'name' => 'Name',
            'brand_id' => 'Brand ID',
            'project_outlet_id' => 'Project Outlet ID',
            'oos_created_at' => 'Oos Created At',
            'is_yellow' => 'Is Yellow',
            'is_red' => 'Is Red',
        ];
    }
}
