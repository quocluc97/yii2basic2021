<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "oos".
 *
 * @property int $id
 * @property int $type
 * @property int $user_id
 * @property int $project_outlet_id
 * @property int|null $oos_parent
 * @property int|null $status
 * @property int|null $created_at
 * @property bool $is_sale
 *
 * @property User $user
 * @property ProjectOutlet $projectOutlet
 * @property OosDetail[] $oosDetails
 */
class Oos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type', 'user_id', 'project_outlet_id', 'oos_parent', 'status', 'created_at'], 'integer'],
            [['user_id', 'project_outlet_id'], 'required'],
            [['is_sale'], 'boolean'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'type' => 'Type',
            'user_id' => 'User ID',
            'project_outlet_id' => 'Project Outlet ID',
            'oos_parent' => 'Oos Parent',
            'status' => 'Status',
            'created_at' => 'Created At',
            'is_sale' => 'Is Sale',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
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

    /**
     * Gets query for [[OosDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOosDetails()
    {
        return $this->hasMany(OosDetail::className(), ['oos_id' => 'id']);
    }
}
