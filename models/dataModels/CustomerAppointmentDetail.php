<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer_appointment_detail".
 *
 * @property int $id
 * @property int $customer_appointment_id
 * @property int $gift_id
 * @property int $qty
 * @property int $status
 *
 * @property CustomerAppointment $customerAppointment
 * @property Gift $gift
 */
class CustomerAppointmentDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer_appointment_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_appointment_id', 'gift_id', 'qty', 'status'], 'required'],
            [['customer_appointment_id', 'gift_id', 'qty', 'status'], 'integer'],
            [['customer_appointment_id'], 'exist', 'skipOnError' => true, 'targetClass' => CustomerAppointment::className(), 'targetAttribute' => ['customer_appointment_id' => 'id']],
            [['gift_id'], 'exist', 'skipOnError' => true, 'targetClass' => Gift::className(), 'targetAttribute' => ['gift_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customer_appointment_id' => 'Customer Appointment ID',
            'gift_id' => 'Gift ID',
            'qty' => 'Qty',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[CustomerAppointment]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAppointment()
    {
        return $this->hasOne(CustomerAppointment::className(), ['id' => 'customer_appointment_id']);
    }

    /**
     * Gets query for [[Gift]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGift()
    {
        return $this->hasOne(Gift::className(), ['id' => 'gift_id']);
    }
}
