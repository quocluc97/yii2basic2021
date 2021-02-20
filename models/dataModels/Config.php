<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "config".
 *
 * @property int $id
 * @property string $key
 * @property string $value
 * @property int $status
 * @property int|null $created_at
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'config';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['key', 'value'], 'required'],
            [['value'], 'string'],
            [['status', 'created_at'], 'integer'],
            [['key'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Key',
            'value' => 'Value',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
    }
}
