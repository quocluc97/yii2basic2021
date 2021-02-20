<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int|null $status
 * @property int $created_at
 *
 * @property BrandSetProject[] $brandSetProjects
 * @property CheckInOutSup[] $checkInOutSups
 * @property Command[] $commands
 * @property Group[] $groups
 * @property Plan[] $plans
 * @property PlanAllocation[] $planAllocations
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name', 'created_at'], 'required'],
            [['status', 'created_at'], 'integer'],
            [['code', 'name'], 'string', 'max' => 255],
            [['code'], 'unique'],
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
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[BrandSetProjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProjects()
    {
        return $this->hasMany(BrandSetProject::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[CheckInOutSups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSups()
    {
        return $this->hasMany(CheckInOutSup::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[Commands]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommands()
    {
        return $this->hasMany(Command::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[Groups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroups()
    {
        return $this->hasMany(Group::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[Plans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['project_id' => 'id']);
    }

    /**
     * Gets query for [[PlanAllocations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanAllocations()
    {
        return $this->hasMany(PlanAllocation::className(), ['project_id' => 'id']);
    }
}
