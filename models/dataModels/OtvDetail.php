<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "otv_detail".
 *
 * @property int $id
 * @property int $otv_id
 * @property int $product_id
 * @property int $qty
 *
 * @property Otv $otv
 * @property Product $product
 */
class OtvDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'otv_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['otv_id', 'product_id'], 'required'],
            [['otv_id', 'product_id', 'qty'], 'integer'],
            [['otv_id'], 'exist', 'skipOnError' => true, 'targetClass' => Otv::className(), 'targetAttribute' => ['otv_id' => 'id']],
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
            'otv_id' => 'Otv ID',
            'product_id' => 'Product ID',
            'qty' => 'Qty',
        ];
    }

    /**
     * Gets query for [[Otv]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtv()
    {
        return $this->hasOne(Otv::className(), ['id' => 'otv_id']);
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
