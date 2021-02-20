<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_sp".
 *
 * @property int|null $sp_id
 * @property string|null $code
 * @property string|null $full_name
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $sp_status
 * @property string|null $url
 * @property string|null $province_name
 * @property int|null $province_id
 * @property int|null $region_id
 * @property string|null $region_name
 * @property int|null $region_status
 */
class ViewSp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_sp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sp_id', 'sp_status', 'province_id', 'region_id', 'region_status'], 'integer'],
            [['code', 'full_name', 'address', 'url', 'province_name', 'region_name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sp_id' => 'Sp ID',
            'code' => 'Code',
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'sp_status' => 'Sp Status',
            'url' => 'Url',
            'province_name' => 'Province Name',
            'province_id' => 'Province ID',
            'region_id' => 'Region ID',
            'region_name' => 'Region Name',
            'region_status' => 'Region Status',
        ];
    }
}
