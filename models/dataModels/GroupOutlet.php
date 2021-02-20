<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "group_outlet".
 *
 * @property int $id
 * @property int $group_id
 * @property int $project_outlet_id
 * @property int|null $status
 * @property int|null $created_at
 *
 * @property Group $group
 * @property ProjectOutlet $projectOutlet
 */
class GroupOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_id', 'project_outlet_id'], 'required'],
            [['group_id', 'project_outlet_id', 'status', 'created_at'], 'integer'],
            [['group_id'], 'exist', 'skipOnError' => true, 'targetClass' => Group::className(), 'targetAttribute' => ['group_id' => 'id']],
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
            'group_id' => 'Group ID',
            'project_outlet_id' => 'Project Outlet ID',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Group]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroup()
    {
        return $this->hasOne(Group::className(), ['id' => 'group_id']);
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
