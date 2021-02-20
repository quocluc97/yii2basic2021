<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "posm".
 *
 * @property int $id
 * @property string|null $code
 * @property string $name
 * @property string $image
 * @property int|null $brand_id
 * @property int|null $status
 * @property string|null $unit
 * @property float|null $price
 * @property string|null $note
 * @property int|null $created_at
 *
 * @property Brand $brand
 * @property PosmOutletDetail[] $posmOutletDetails
 */
class Posm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'image'], 'required'],
            [['brand_id', 'status', 'created_at'], 'integer'],
            [['price'], 'number'],
            [['code', 'name', 'image', 'unit', 'note'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'unit' => 'Unit',
            'price' => 'Price',
            'note' => 'Note',
            'created_at' => 'Created At',
        ];
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
     * Gets query for [[PosmOutletDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosmOutletDetails()
    {
        return $this->hasMany(PosmOutletDetail::className(), ['posm_id' => 'id']);
    }
}
