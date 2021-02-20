<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "brand_set_project_gift".
 *
 * @property int $id
 * @property int $brand_set_project_id
 * @property int $gift_id
 * @property int $qty
 * @property int $qty_on_set
 * @property int|null $status
 * @property int|null $created_at
 *
 * @property Gift $gift
 * @property BrandSetProject $brandSetProject
 */
class BrandSetProjectGift extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_set_project_gift';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_set_project_id', 'gift_id', 'qty'], 'required'],
            [['brand_set_project_id', 'gift_id', 'qty', 'qty_on_set', 'status', 'created_at'], 'integer'],
            [['gift_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gift::className(), 'targetAttribute' => ['gift_id' => 'id']],
            [['brand_set_project_id'], 'exist', 'skipOnError' => true, 'targetClass' => BrandSetProject::className(), 'targetAttribute' => ['brand_set_project_id' => 'id']],
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
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
            'qty_on_set' => 'Qty On Set',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Gift]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGift()
    {
        return $this->hasOne(Gift::className(), ['id' => 'gift_id']);
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
}
