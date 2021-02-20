<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property int $id
 * @property int $project_id
 * @property int $agency_id
 * @property int $status
 * @property int|null $created_at
 * @property int $created_by
 *
 * @property Project $project
 * @property Agency $agency
 * @property PlanDetail[] $planDetails
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'agency_id', 'created_by'], 'required'],
            [['project_id', 'agency_id', 'status', 'created_at', 'created_by'], 'integer'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['agency_id'], 'exist', 'skipOnError' => true, 'targetClass' => Agency::className(), 'targetAttribute' => ['agency_id' => 'id']],
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
            'created_by' => 'Created By',
        ];
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
     * Gets query for [[Agency]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgency()
    {
        return $this->hasOne(Agency::className(), ['id' => 'agency_id']);
    }

    /**
     * Gets query for [[PlanDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanDetails()
    {
        return $this->hasMany(PlanDetail::className(), ['plan_id' => 'id']);
    }
}
