<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "group_detail".
 *
 * @property int $id
 * @property int $group_id
 * @property int $product_id
 * @property float $is_red
 * @property float $is_yellow
 * @property int|null $status
 * @property int|null $created_at
 *
 * @property Group $group
 * @property Product $product
 */
class GroupDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'product_id', 'is_yellow'], 'required'],
            [['group_id', 'product_id', 'status', 'created_at'], 'integer'],
            [['is_red', 'is_yellow'], 'number'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
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
            'group_id' => 'Group ID',
            'product_id' => 'Product ID',
            'is_red' => 'Is Red',
            'is_yellow' => 'Is Yellow',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
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
