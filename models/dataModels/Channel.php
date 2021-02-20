<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "channel".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $note
 * @property int|null $status
 *
 * @property Outlet[] $outlets
 */
class Channel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'channel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'name'], 'required'],
            [['status'], 'integer'],
            [['code', 'name', 'note'], 'string', 'max' => 255],
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
            'note' => 'Note',
            'status' => 'Status',
        ];
    }

    /**
     * Gets query for [[Outlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutlets()
    {
        return $this->hasMany(Outlet::className(), ['channel_id' => 'id']);
    }
}
