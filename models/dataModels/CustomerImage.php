<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_image".
 *
 * @property int $id
 * @property int $customer_id
 * @property int $image_id
 * @property int $status
 * @property int|null $created_at
 * @property int|null $type
 */
class CustomerImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'image_id'], 'required'],
            [['customer_id', 'image_id', 'status', 'created_at', 'type'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_id' => 'Customer ID',
            'image_id' => 'Image ID',
            'status' => 'Status',
            'created_at' => 'Created At',
            'type' => 'Type',
        ];
    }
}
