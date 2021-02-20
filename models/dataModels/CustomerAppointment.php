<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_appointment".
 *
 * @property int $id
 * @property int $customer_id
 * @property int|null $appointment_image_id
 * @property int|null $delivery_image_id
 * @property int|null $status
 * @property int|null $created_at
 *
 * @property Customer $customer
 * @property Image $appointmentImage
 * @property Image $deliveryImage
 * @property CustomerAppointmentDetail[] $customerAppointmentDetails
 */
class CustomerAppointment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_appointment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id'], 'required'],
            [['customer_id', 'appointment_image_id', 'delivery_image_id', 'status', 'created_at'], 'integer'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['appointment_image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['appointment_image_id' => 'id']],
            [['delivery_image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['delivery_image_id' => 'id']],
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
            'appointment_image_id' => 'Appointment Image ID',
            'delivery_image_id' => 'Delivery Image ID',
            'status' => 'Status',
            'created_at' => 'Created At',
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
     * Gets query for [[AppointmentImage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAppointmentImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'appointment_image_id']);
    }

    /**
     * Gets query for [[DeliveryImage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeliveryImage()
    {
        return $this->hasOne(Image::className(), ['id' => 'delivery_image_id']);
    }

    /**
     * Gets query for [[CustomerAppointmentDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAppointmentDetails()
    {
        return $this->hasMany(CustomerAppointmentDetail::className(), ['customer_appointment_id' => 'id']);
    }
}
