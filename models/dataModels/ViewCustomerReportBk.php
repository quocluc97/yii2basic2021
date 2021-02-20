<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_customer_report_bk".
 *
 * @property int|null $customer_id
 * @property string|null $bill_number
 * @property string|null $customer_name
 * @property string|null $phone
 * @property int|null $gender
 * @property string|null $email
 * @property string|null $year_of_bird
 * @property string|null $gift_name
 * @property int|null $gift_qty
 * @property string|null $product_name
 * @property int|null $product_qty
 * @property string|null $day
 * @property int|null $customer_created_at
 * @property int|null $outlet_id
 * @property string|null $outlet_name
 * @property int|null $region_id
 * @property string|null $image_url
 * @property int|null $device_created_at
 */
class ViewCustomerReportBk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_customer_report_bk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_id', 'gender', 'gift_qty', 'product_qty', 'customer_created_at', 'outlet_id', 'region_id', 'device_created_at'], 'integer'],
            [['bill_number', 'customer_name', 'email', 'gift_name', 'product_name', 'outlet_name', 'image_url'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['year_of_bird'], 'string', 'max' => 5],
            [['day'], 'string', 'max' => 19],
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
            'customer_name' => 'Customer Name',
            'phone' => 'Phone',
            'gender' => 'Gender',
            'email' => 'Email',
            'year_of_bird' => 'Year Of Bird',
            'gift_name' => 'Gift Name',
            'gift_qty' => 'Gift Qty',
            'product_name' => 'Product Name',
            'product_qty' => 'Product Qty',
            'day' => 'Day',
            'customer_created_at' => 'Customer Created At',
            'outlet_id' => 'Outlet ID',
            'outlet_name' => 'Outlet Name',
            'region_id' => 'Region ID',
            'image_url' => 'Image Url',
            'device_created_at' => 'Device Created At',
        ];
    }
}
