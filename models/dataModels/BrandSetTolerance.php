<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "brand_set_tolerance".
 *
 * @property int $id
 * @property int $brand_set_project_id
 * @property float $tolerance
 * @property int $status
 * @property int|null $created_at
 * @property int $warehouse_id
 *
 * @property BrandSetProject $brandSetProject
 */
class BrandSetTolerance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_set_tolerance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_set_project_id', 'tolerance', 'warehouse_id'], 'required'],
            [['brand_set_project_id', 'status', 'created_at', 'warehouse_id'], 'integer'],
            [['tolerance'], 'number'],
            [['brand_set_project_id'], 'exist', 'skipOnError' => true, 'targetClass' => BrandSetProject::className(), 'targetAttribute' => ['brand_set_project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand_set_project_id' => 'Brand Set Project ID',
            'tolerance' => 'Tolerance',
            'status' => 'Status',
            'created_at' => 'Created At',
            'warehouse_id' => 'Warehouse ID',
        ];
    }

    /**
     * Gets query for [[BrandSetProject]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProject()
    {
        return $this->hasOne(BrandSetProject::className(), ['id' => 'brand_set_project_id']);
    }
}
