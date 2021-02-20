<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "receipt_image".
 *
 * @property int $id
 * @property int $receipt_id
 * @property int|null $reciept_detail_id
 * @property int $image_id
 * @property int|null $status
 */
class ReceiptImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'receipt_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['receipt_id', 'image_id'], 'required'],
            [['receipt_id', 'reciept_detail_id', 'image_id', 'status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'receipt_id' => 'Receipt ID',
            'reciept_detail_id' => 'Reciept Detail ID',
            'image_id' => 'Image ID',
            'status' => 'Status',
        ];
    }
}
