<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_ontop".
 *
 * @property int $id
 * @property int $customer_id
 * @property string $customer_name
 * @property string $day_of_birth
 * @property string $id_code
 * @property int|null $status
 * @property int $created_at
 * @property int $created_by
 * @property string|null $phone_others
 *
 * @property Customer $customer
 * @property CustomerOntopImage[] $customerOntopImages
 */
class CustomerOntop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_ontop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'customer_name', 'day_of_birth', 'id_code', 'created_at', 'created_by'], 'required'],
            [['customer_id', 'status', 'created_at', 'created_by'], 'integer'],
            [['customer_name', 'day_of_birth', 'id_code', 'phone_others'], 'string', 'max' => 255],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
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
            'customer_name' => 'Customer Name',
            'day_of_birth' => 'Day Of Birth',
            'id_code' => 'Id Code',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'phone_others' => 'Phone Others',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[CustomerOntopImages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerOntopImages()
    {
        return $this->hasMany(CustomerOntopImage::className(), ['customer_ontop_id' => 'id']);
    }
}
