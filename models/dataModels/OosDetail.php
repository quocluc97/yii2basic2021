<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "oos_detail".
 *
 * @property int $id
 * @property int $oos_id
 * @property int $product_id
 * @property int $qty
 *
 * @property Oos $oos
 * @property Product $product
 */
class OosDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oos_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oos_id', 'product_id'], 'required'],
            [['oos_id', 'product_id', 'qty'], 'integer'],
            [['oos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Oos::className(), 'targetAttribute' => ['oos_id' => 'id']],
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
            'oos_id' => 'Oos ID',
            'product_id' => 'Product ID',
            'qty' => 'Qty',
        ];
    }

    /**
     * Gets query for [[Oos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOos()
    {
        return $this->hasOne(Oos::className(), ['id' => 'oos_id']);
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
