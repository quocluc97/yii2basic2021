<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_oos_product".
 *
 * @property int|null $product_id
 * @property float|null $is_yellow
 * @property float|null $is_red
 * @property int|null $project_outlet_id
 * @property string|null $name
 * @property string|null $image
 * @property int|null $brand_id
 */
class ViewOosProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_oos_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'project_outlet_id', 'brand_id'], 'integer'],
            [['is_yellow', 'is_red'], 'number'],
            [['name', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'is_yellow' => 'Is Yellow',
            'is_red' => 'Is Red',
            'project_outlet_id' => 'Project Outlet ID',
            'name' => 'Name',
            'image' => 'Image',
            'brand_id' => 'Brand ID',
        ];
    }
}
