<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "brand_set_outlet".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property int $brand_id
 * @property int $brand_set_project_id
 * @property int $status
 * @property int|null $created_at
 *
 * @property BrandSetProject $brandSetProject
 * @property Brand $brand
 * @property ProjectOutlet $projectOutlet
 */
class BrandSetOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'brand_set_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'brand_id', 'brand_set_project_id'], 'required'],
            [['project_outlet_id', 'brand_id', 'brand_set_project_id', 'status', 'created_at'], 'integer'],
            [['brand_set_project_id'], 'exist', 'skipOnError' => true, 'targetClass' => BrandSetProject::className(), 'targetAttribute' => ['brand_set_project_id' => 'id']],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'id']],
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
            'brand_id' => 'Brand ID',
            'brand_set_project_id' => 'Brand Set Project ID',
            'status' => 'Status',
            'created_at' => 'Created At',
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

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
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
}
