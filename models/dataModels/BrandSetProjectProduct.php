<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "brand_set_project_product".
 *
 * @property int $id
 * @property int $brand_set_project_id
 * @property int|null $product_id
 * @property int|null $brand_id
 * @property int $qty
 * @property int|null $status
 * @property int|null $created_at
 *
 * @property BrandSetProject $brandSetProject
 * @property Product $product
 */
class BrandSetProjectProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_set_project_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_set_project_id', 'qty'], 'required'],
            [['brand_set_project_id', 'product_id', 'brand_id', 'qty', 'status', 'created_at'], 'integer'],
            [['brand_set_project_id'], 'exist', 'skipOnError' => true, 'targetClass' => BrandSetProject::className(), 'targetAttribute' => ['brand_set_project_id' => 'id']],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_set_project_id' => 'Brand Set Project ID',
            'product_id' => 'Product ID',
            'brand_id' => 'Brand ID',
            'qty' => 'Qty',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[BrandSetProject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProject()
    {
        return $this->hasOne(BrandSetProject::className(), ['id' => 'brand_set_project_id']);
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }
}
