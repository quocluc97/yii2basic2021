<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property string $bill_number
 * @property string $name
 * @property string $phone
 * @property int|null $gender
 * @property string|null $email
 * @property string|null $year_of_bird
 * @property int|null $reason
 * @property string|null $note
 * @property int|null $status
 * @property int $created_by
 * @property int $created_type 1: SP, 2: SUP
 * @property int|null $created_at
 * @property int $total_bill
 * @property int $device_created_at
 * @property bool|null $from_brand Nhan hieu
 * @property bool|null $from_price Gia
 * @property bool|null $from_gift qua tang
 * @property bool|null $from_skin bao bi
 * @property string|null $from_others khac
 * @property bool|null $is_see thay quang cao?
 * @property string|null $uuid
 *
 * @property CommandCustomer[] $commandCustomers
 * @property ProjectOutlet $projectOutlet
 * @property CustomerAppointment[] $customerAppointments
 * @property CustomerGiftConfirm[] $customerGiftConfirms
 * @property CustomerGiftDebt[] $customerGiftDebts
 * @property CustomerGiftReceived[] $customerGiftReceiveds
 * @property CustomerOntop[] $customerOntops
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'bill_number', 'name', 'phone', 'created_by'], 'required'],
            [['project_outlet_id', 'gender', 'reason', 'status', 'created_by', 'created_type', 'created_at', 'total_bill', 'device_created_at'], 'integer'],
            [['note'], 'string'],
            [['from_brand', 'from_price', 'from_gift', 'from_skin', 'is_see'], 'boolean'],
            [['bill_number', 'name', 'email', 'from_others', 'uuid'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['year_of_bird'], 'string', 'max' => 5],
            [['project_outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectOutlet::className(), 'targetAttribute' => ['project_outlet_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_outlet_id' => 'Project Outlet ID',
            'bill_number' => 'Bill Number',
            'name' => 'Name',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'email' => 'Email',
            'year_of_bird' => 'Year Of Bird',
            'reason' => 'Reason',
            'note' => 'Note',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_type' => 'Created Type',
            'created_at' => 'Created At',
            'total_bill' => 'Total Bill',
            'device_created_at' => 'Device Created At',
            'from_brand' => 'From Brand',
            'from_price' => 'From Price',
            'from_gift' => 'From Gift',
            'from_skin' => 'From Skin',
            'from_others' => 'From Others',
            'is_see' => 'Is See',
            'uuid' => 'Uuid',
        ];
    }

    /**
     * Gets query for [[CommandCustomers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandCustomers()
    {
        return $this->hasMany(CommandCustomer::className(), ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[ProjectOutlet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOutlet()
    {
        return $this->hasOne(ProjectOutlet::className(), ['id' => 'project_outlet_id']);
    }

    /**
     * Gets query for [[CustomerAppointments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerAppointments()
    {
        return $this->hasMany(CustomerAppointment::className(), ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftConfirms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftConfirms()
    {
        return $this->hasMany(CustomerGiftConfirm::className(), ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftDebts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftDebts()
    {
        return $this->hasMany(CustomerGiftDebt::className(), ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerGiftReceiveds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerGiftReceiveds()
    {
        return $this->hasMany(CustomerGiftReceived::className(), ['customer_id' => 'id']);
    }

    /**
     * Gets query for [[CustomerOntops]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomerOntops()
    {
        return $this->hasMany(CustomerOntop::className(), ['customer_id' => 'id']);
    }
}
