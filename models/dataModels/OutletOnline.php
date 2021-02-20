<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "outlet_online".
 *
 * @property int $project_outlet_id
 * @property bool $is_online
 * @property int|null $created_at
 * @property int $id
 * @property string|null $online_code
 *
 * @property ProjectOutlet $projectOutlet
 */
class OutletOnline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outlet_online';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id'], 'required'],
            [['project_outlet_id', 'created_at'], 'integer'],
            [['is_online'], 'boolean'],
            [['online_code'], 'string', 'max' => 255],
            [['project_outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectOutlet::className(), 'targetAttribute' => ['project_outlet_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'project_outlet_id' => 'Project Outlet ID',
            'is_online' => 'Is Online',
            'created_at' => 'Created At',
            'id' => 'ID',
            'online_code' => 'Online Code',
        ];
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
