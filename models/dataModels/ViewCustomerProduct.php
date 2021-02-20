<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_customer_product".
 *
 * @property int|null $id
 * @property int|null $project_outlet_id
 * @property string|null $bill_number
 * @property string|null $name
 * @property string|null $phone
 * @property int|null $gender
 * @property string|null $email
 * @property string|null $year_of_bird
 * @property int|null $reason
 * @property string|null $note
 * @property int|null $status
 * @property int|null $created_by
 * @property int|null $created_type
 * @property int|null $created_at
 * @property int|null $total_bill
 * @property int|null $device_created_at
 * @property string|null $outlet_name
 * @property int|null $region_id
 * @property int|null $outlet_id
 * @property int|null $province_id
 * @property int|null $channel_id
 * @property string|null $product_name
 * @property string|null $product_unit
 * @property int|null $qty
 * @property string|null $channel_name
 * @property string|null $outlet_code
 * @property string|null $outlet_address
 * @property string|null $province_name
 * @property string|null $region_name
 * @property bool|null $from_price
 * @property bool|null $from_skin
 * @property bool|null $from_gift
 * @property string|null $from_others
 * @property bool|null $is_see
 * @property bool|null $from_brand
 */
class ViewCustomerProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_customer_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'project_outlet_id', 'gender', 'reason', 'status', 'created_by', 'created_type', 'created_at', 'total_bill', 'device_created_at', 'region_id', 'outlet_id', 'province_id', 'channel_id', 'qty'], 'integer'],
            [['note'], 'string'],
            [['from_price', 'from_skin', 'from_gift', 'is_see', 'from_brand'], 'boolean'],
            [['bill_number', 'name', 'email', 'outlet_name', 'product_name', 'product_unit', 'channel_name', 'outlet_code', 'outlet_address', 'province_name', 'region_name', 'from_others'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['year_of_bird'], 'string', 'max' => 5],
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
            'outlet_name' => 'Outlet Name',
            'region_id' => 'Region ID',
            'outlet_id' => 'Outlet ID',
            'province_id' => 'Province ID',
            'channel_id' => 'Channel ID',
            'product_name' => 'Product Name',
            'product_unit' => 'Product Unit',
            'qty' => 'Qty',
            'channel_name' => 'Channel Name',
            'outlet_code' => 'Outlet Code',
            'outlet_address' => 'Outlet Address',
            'province_name' => 'Province Name',
            'region_name' => 'Region Name',
            'from_price' => 'From Price',
            'from_skin' => 'From Skin',
            'from_gift' => 'From Gift',
            'from_others' => 'From Others',
            'is_see' => 'Is See',
            'from_brand' => 'From Brand',
        ];
    }
}
