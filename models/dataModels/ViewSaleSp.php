<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_sale_sp".
 *
 * @property int|null $id
 * @property string|null $code
 * @property string|null $full_name
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $avatar_id
 * @property int|null $province_id
 * @property int|null $created_by
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $region_id
 * @property string|null $region_name
 * @property string|null $province_name
 * @property string|null $avatar_url
 * @property int|null $sp_emergency
 */
class ViewSaleSp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_sale_sp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'avatar_id', 'province_id', 'created_by', 'status', 'created_at', 'region_id', 'sp_emergency'], 'integer'],
            [['code', 'full_name', 'address', 'region_name', 'province_name', 'avatar_url'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'avatar_id' => 'Avatar ID',
            'province_id' => 'Province ID',
            'created_by' => 'Created By',
            'status' => 'Status',
            'created_at' => 'Created At',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'province_name' => 'Province Name',
            'avatar_url' => 'Avatar Url',
            'sp_emergency' => 'Sp Emergency',
        ];
    }
}
