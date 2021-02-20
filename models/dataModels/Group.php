<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "group".
 *
 * @property int $id
 * @property int $project_id
 * @property string $name
 * @property int $status
 * @property int|null $created_at
 *
 * @property Project $project
 * @property GroupDetail[] $groupDetails
 * @property GroupOutlet[] $groupOutlets
 */
class Group extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'name'], 'required'],
            [['project_id', 'status', 'created_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'name' => 'Name',
            'status' => 'Status',
            'created_at' => 'Created At',
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
     * Gets query for [[GroupDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupDetails()
    {
        return $this->hasMany(GroupDetail::className(), ['group_id' => 'id']);
    }

    /**
     * Gets query for [[GroupOutlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupOutlets()
    {
        return $this->hasMany(GroupOutlet::className(), ['group_id' => 'id']);
    }
}
