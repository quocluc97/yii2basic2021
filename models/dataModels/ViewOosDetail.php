<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_oos_detail".
 *
 * @property int|null $id
 * @property int|null $oos_id
 * @property int|null $product_id
 * @property int|null $qty
 * @property int|null $relation_id
 * @property int|null $qty_total
 */
class ViewOosDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_oos_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'oos_id', 'product_id', 'qty', 'relation_id', 'qty_total'], 'integer'],
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
            'relation_id' => 'Relation ID',
            'qty_total' => 'Qty Total',
        ];
    }
}
