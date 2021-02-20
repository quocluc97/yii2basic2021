<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "command_gift_detail".
 *
 * @property int $id
 * @property int $command_id
 * @property int $brand_set_project_id
 * @property int $qty
 * @property int $status
 *
 * @property BrandSetProject $brandSetProject
 * @property Command $command
 */
class CommandGiftDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'command_gift_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['command_id', 'brand_set_project_id', 'qty'], 'required'],
            [['command_id', 'brand_set_project_id', 'qty', 'status'], 'integer'],
            [['brand_set_project_id'], 'exist', 'skipOnError' => true, 'targetClass' => BrandSetProject::className(), 'targetAttribute' => ['brand_set_project_id' => 'id']],
            [['command_id'], 'exist', 'skipOnError' => true, 'targetClass' => Command::className(), 'targetAttribute' => ['command_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'command_id' => 'Command ID',
            'brand_set_project_id' => 'Brand Set Project ID',
            'qty' => 'Qty',
            'status' => 'Status',
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
     * Gets query for [[Command]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommand()
    {
        return $this->hasOne(Command::className(), ['id' => 'command_id']);
    }
}
