<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "plan_allocation".
 *
 * @property int $id
 * @property int $project_id
 * @property int $agency_id
 * @property int $status
 * @property int|null $created_at
 *
 * @property Agency $agency
 * @property Project $project
 * @property PlanAllocationDetail[] $planAllocationDetails
 */
class PlanAllocation extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan_allocation';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'agency_id'], 'required'],
            [['project_id', 'agency_id', 'status', 'created_at'], 'integer'],
            [['agency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agency::className(), 'targetAttribute' => ['agency_id' => 'id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'agency_id' => 'Agency ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Agency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgency()
    {
        return $this->hasOne(Agency::className(), ['id' => 'agency_id']);
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * Gets query for [[PlanAllocationDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanAllocationDetails()
    {
        return $this->hasMany(PlanAllocationDetail::className(), ['plan_allocation_id' => 'id']);
    }
}
