<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "brand".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $note
 * @property int|null $status
 * @property int|null $created_at
 *
 * @property BrandSetOutlet[] $brandSetOutlets
 * @property BrandSetProject[] $brandSetProjects
 * @property Gift[] $gifts
 * @property Posm[] $posms
 * @property Product[] $products
 */
class Brand extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['status', 'created_at'], 'integer'],
            [['code', 'name', 'note'], 'string', 'max' => 255],
            [['code'], 'unique'],
            [['name'], 'unique'],
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
            'note' => 'Note',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[BrandSetOutlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetOutlets()
    {
        return $this->hasMany(BrandSetOutlet::className(), ['brand_id' => 'id']);
    }

    /**
     * Gets query for [[BrandSetProjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProjects()
    {
        return $this->hasMany(BrandSetProject::className(), ['brand_id' => 'id']);
    }

    /**
     * Gets query for [[Gifts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGifts()
    {
        return $this->hasMany(Gift::className(), ['brand_id' => 'id']);
    }

    /**
     * Gets query for [[Posms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosms()
    {
        return $this->hasMany(Posm::className(), ['brand_id' => 'id']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['brand_id' => 'id']);
    }
}
