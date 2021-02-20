<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_ontop_image".
 *
 * @property int $id
 * @property int $customer_ontop_id
 * @property int $image_id
 * @property int $type
 * @property int $status
 *
 * @property CustomerOntop $customerOntop
 * @property Image $image
 */
class CustomerOntopImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_ontop_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_ontop_id', 'image_id', 'type'], 'required'],
            [['customer_ontop_id', 'image_id', 'type', 'status'], 'integer'],
            [['customer_ontop_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerOntop::className(), 'targetAttribute' => ['customer_ontop_id' => 'id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_ontop_id' => 'Customer Ontop ID',
            'image_id' => 'Image ID',
            'type' => 'Type',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[CustomerOntop]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerOntop()
    {
        return $this->hasOne(CustomerOntop::className(), ['id' => 'customer_ontop_id']);
    }

    /**
     * Gets query for [[Image]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_id']);
    }
}
