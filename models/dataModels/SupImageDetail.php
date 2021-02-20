<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sup_image_detail".
 *
 * @property int $id
 * @property int $sup_image_id
 * @property int $image_id
 * @property int $type
 */
class SupImageDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sup_image_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sup_image_id', 'image_id', 'type'], 'required'],
            [['sup_image_id', 'image_id', 'type'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sup_image_id' => 'Sup Image ID',
            'image_id' => 'Image ID',
            'type' => 'Type',
        ];
    }
}
