<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "back_up_file".
 *
 * @property int $id
 * @property string $file_name
 * @property string $file_url
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $created_by
 */
class BackUpFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'back_up_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['file_name', 'file_url'], 'required'],
            [['status', 'created_at', 'created_by'], 'integer'],
            [['file_name', 'file_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_name' => 'File Name',
            'file_url' => 'File Url',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
        ];
    }
}
