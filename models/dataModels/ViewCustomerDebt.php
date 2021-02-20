<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_customer_debt".
 *
 * @property int|null $customer_id
 * @property string|null $bill_number
 * @property string|null $name
 * @property string|null $phone
 * @property string|null $email
 * @property int|null $total_bill
 * @property string|null $address
 * @property string|null $reason
 * @property int|null $status
 * @property int|null $receive_at
 * @property string|null $outlet_name
 * @property int|null $region_id
 * @property int|null $channel_id
 * @property int|null $command_id
 * @property int|null $outlet_id
 * @property int|null $received_at
 * @property int|null $province_id
 * @property string|null $sku_list
 * @property string|null $qty_list
 * @property string|null $region_name
 * @property string|null $province_name
 * @property string|null $warehouse_name
 * @property int|null $created_at
 * @property string|null $image_url
 * @property string|null $note
 */
class ViewCustomerDebt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_customer_debt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'total_bill', 'status', 'receive_at', 'region_id', 'channel_id', 'command_id', 'outlet_id', 'received_at', 'province_id', 'created_at'], 'integer'],
            [['reason', 'sku_list', 'qty_list', 'note'], 'string'],
            [['bill_number', 'name', 'email', 'address', 'outlet_name', 'region_name', 'province_name', 'warehouse_name', 'image_url'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'customer_id' => 'Customer ID',
            'bill_number' => 'Bill Number',
            'name' => 'Name',
            'phone' => 'Phone',
            'email' => 'Email',
            'total_bill' => 'Total Bill',
            'address' => 'Address',
            'reason' => 'Reason',
            'status' => 'Status',
            'receive_at' => 'Receive At',
            'outlet_name' => 'Outlet Name',
            'region_id' => 'Region ID',
            'channel_id' => 'Channel ID',
            'command_id' => 'Command ID',
            'outlet_id' => 'Outlet ID',
            'received_at' => 'Received At',
            'province_id' => 'Province ID',
            'sku_list' => 'Sku List',
            'qty_list' => 'Qty List',
            'region_name' => 'Region Name',
            'province_name' => 'Province Name',
            'warehouse_name' => 'Warehouse Name',
            'created_at' => 'Created At',
            'image_url' => 'Image Url',
            'note' => 'Note',
        ];
    }
}
