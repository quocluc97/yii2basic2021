<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_customer_ontop".
 *
 * @property string|null $code
 * @property string|null $outlet_name
 * @property int|null $done_time
 * @property string|null $customer_name
 * @property string|null $day_of_birth
 * @property string|null $id_code
 * @property string|null $phone
 * @property string|null $phone_others
 * @property int|null $customer_created_at
 * @property string|null $id_card_url_1
 * @property string|null $id_card_url_2
 * @property string|null $receipt_url
 * @property string|null $customer_url
 * @property string|null $screen_url
 * @property int|null $customer_id
 * @property int|null $project_outlet_id
 * @property int|null $ontop_status
 * @property int|null $is_field_confirm
 * @property int|null $ontop_id
 */
class ViewCustomerOntop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_customer_ontop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['done_time', 'customer_created_at', 'customer_id', 'project_outlet_id', 'ontop_status', 'is_field_confirm', 'ontop_id'], 'integer'],
            [['code', 'outlet_name', 'customer_name', 'day_of_birth', 'id_code', 'phone_others', 'id_card_url_1', 'id_card_url_2', 'receipt_url', 'customer_url', 'screen_url'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'outlet_name' => 'Outlet Name',
            'done_time' => 'Done Time',
            'customer_name' => 'Customer Name',
            'day_of_birth' => 'Day Of Birth',
            'id_code' => 'Id Code',
            'phone' => 'Phone',
            'phone_others' => 'Phone Others',
            'customer_created_at' => 'Customer Created At',
            'id_card_url_1' => 'Id Card Url 1',
            'id_card_url_2' => 'Id Card Url 2',
            'receipt_url' => 'Receipt Url',
            'customer_url' => 'Customer Url',
            'screen_url' => 'Screen Url',
            'customer_id' => 'Customer ID',
            'project_outlet_id' => 'Project Outlet ID',
            'ontop_status' => 'Ontop Status',
            'is_field_confirm' => 'Is Field Confirm',
            'ontop_id' => 'Ontop ID',
        ];
    }
}
