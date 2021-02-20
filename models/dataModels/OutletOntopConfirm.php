<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "outlet_ontop_confirm".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property string $online_code
 * @property int|null $created_at
 * @property string|null $ip
 * @property int|null $status
 *
 * @property ProjectOutlet $projectOutlet
 * @property ProjectOutlet $projectOutlet0
 */
class OutletOntopConfirm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outlet_ontop_confirm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'online_code'], 'required'],
            [['project_outlet_id', 'created_at', 'status'], 'integer'],
            [['online_code', 'ip'], 'string', 'max' => 255],
            [['project_outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectOutlet::className(), 'targetAttribute' => ['project_outlet_id' => 'id']],
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
            'online_code' => 'Online Code',
            'created_at' => 'Created At',
            'ip' => 'Ip',
            'status' => 'Status',
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

    /**
     * Gets query for [[ProjectOutlet0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOutlet0()
    {
        return $this->hasOne(ProjectOutlet::className(), ['id' => 'project_outlet_id']);
    }
}
