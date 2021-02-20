<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $code
 * @property string $name
 * @property string $image
 * @property int $brand_id
 * @property bool $is_oos
 * @property bool $is_otv
 * @property string|null $unit
 * @property string|null $note
 * @property int|null $status
 * @property int|null $created_at
 * @property bool|null $is_gift
 * @property string|null $unit_oos
 * @property int|null $parent_id
 * @property bool|null $is_promotion
 *
 * @property BrandSetProjectProduct[] $brandSetProjectProducts
 * @property GroupDetail[] $groupDetails
 * @property OosDetail[] $oosDetails
 * @property OosProductLevel[] $oosProductLevels
 * @property OtvDetail[] $otvDetails
 * @property Brand $brand
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'image', 'brand_id'], 'required'],
            [['brand_id', 'status', 'created_at', 'parent_id'], 'integer'],
            [['is_oos', 'is_otv', 'is_gift', 'is_promotion'], 'boolean'],
            [['code', 'name', 'image', 'unit', 'note', 'unit_oos'], 'string', 'max' => 255],
            [['code'], 'unique'],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'name' => 'Name',
            'image' => 'Image',
            'brand_id' => 'Brand ID',
            'is_oos' => 'Is Oos',
            'is_otv' => 'Is Otv',
            'unit' => 'Unit',
            'note' => 'Note',
            'status' => 'Status',
            'created_at' => 'Created At',
            'is_gift' => 'Is Gift',
            'unit_oos' => 'Unit Oos',
            'parent_id' => 'Parent ID',
            'is_promotion' => 'Is Promotion',
        ];
    }

    /**
     * Gets query for [[BrandSetProjectProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProjectProducts()
    {
        return $this->hasMany(BrandSetProjectProduct::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[GroupDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupDetails()
    {
        return $this->hasMany(GroupDetail::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[OosDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOosDetails()
    {
        return $this->hasMany(OosDetail::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[OosProductLevels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOosProductLevels()
    {
        return $this->hasMany(OosProductLevel::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[OtvDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtvDetails()
    {
        return $this->hasMany(OtvDetail::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }
}
