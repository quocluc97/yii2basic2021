<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "brand_set_project".
 *
 * @property int $id
 * @property int $brand_id
 * @property int $project_id
 * @property string $name
 * @property int $region_id
 * @property int $type
 * @property int $type_product
 * @property int $qty_per_day
 * @property int|null $status
 * @property int|null $created_at
 * @property string|null $note
 * @property bool|null $is_second
 *
 * @property BrandSetOutlet[] $brandSetOutlets
 * @property Brand $brand
 * @property Project $project
 * @property Region $region
 * @property BrandSetProjectGift[] $brandSetProjectGifts
 * @property BrandSetProjectProduct[] $brandSetProjectProducts
 * @property BrandSetTolerance[] $brandSetTolerances
 * @property CommandGiftDetail[] $commandGiftDetails
 */
class BrandSetProject extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_set_project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'project_id', 'name', 'region_id'], 'required'],
            [['brand_id', 'project_id', 'region_id', 'type', 'type_product', 'qty_per_day', 'status', 'created_at'], 'integer'],
            [['is_second'], 'boolean'],
            [['name', 'note'], 'string', 'max' => 255],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['region_id'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['region_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_id' => 'Brand ID',
            'project_id' => 'Project ID',
            'name' => 'Name',
            'region_id' => 'Region ID',
            'type' => 'Type',
            'type_product' => 'Type Product',
            'qty_per_day' => 'Qty Per Day',
            'status' => 'Status',
            'created_at' => 'Created At',
            'note' => 'Note',
            'is_second' => 'Is Second',
        ];
    }

    /**
     * Gets query for [[BrandSetOutlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetOutlets()
    {
        return $this->hasMany(BrandSetOutlet::className(), ['brand_set_project_id' => 'id']);
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

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * Gets query for [[Region]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id' => 'region_id']);
    }

    /**
     * Gets query for [[BrandSetProjectGifts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProjectGifts()
    {
        return $this->hasMany(BrandSetProjectGift::className(), ['brand_set_project_id' => 'id']);
    }

    /**
     * Gets query for [[BrandSetProjectProducts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProjectProducts()
    {
        return $this->hasMany(BrandSetProjectProduct::className(), ['brand_set_project_id' => 'id']);
    }

    /**
     * Gets query for [[BrandSetTolerances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetTolerances()
    {
        return $this->hasMany(BrandSetTolerance::className(), ['brand_set_project_id' => 'id']);
    }

    /**
     * Gets query for [[CommandGiftDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandGiftDetails()
    {
        return $this->hasMany(CommandGiftDetail::className(), ['brand_set_project_id' => 'id']);
    }
}
