<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "agency".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $note
 * @property int|null $status
 * @property string|null $phone
 * @property string|null $address
 * @property int|null $created_at
 *
 * @property AgencyRegion[] $agencyRegions
 * @property Plan[] $plans
 * @property PlanAllocation[] $planAllocations
 */
class Agency extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agency';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['status', 'created_at'], 'integer'],
            [['code', 'name', 'note', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['code'], 'unique'],
            [['name'], 'unique'],
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
            'name' => 'Name',
            'note' => 'Note',
            'status' => 'Status',
            'phone' => 'Phone',
            'address' => 'Address',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[AgencyRegions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgencyRegions()
    {
        return $this->hasMany(AgencyRegion::className(), ['agency_id' => 'id']);
    }

    /**
     * Gets query for [[Plans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['agency_id' => 'id']);
    }

    /**
     * Gets query for [[PlanAllocations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanAllocations()
    {
        return $this->hasMany(PlanAllocation::className(), ['agency_id' => 'id']);
    }
}
