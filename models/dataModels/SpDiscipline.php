<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sp_discipline".
 *
 * @property int $id
 * @property int $sp_id
 * @property string $title
 * @property string $body
 * @property string|null $file
 * @property int $status
 * @property int $created_by
 * @property int $updated_by
 * @property int|null $created_at
 */
class SpDiscipline extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_discipline';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sp_id', 'title', 'body', 'created_by', 'updated_by'], 'required'],
            [['sp_id', 'status', 'created_by', 'updated_by', 'created_at'], 'integer'],
            [['body'], 'string'],
            [['title', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sp_id' => 'Sp ID',
            'title' => 'Title',
            'body' => 'Body',
            'file' => 'File',
            'status' => 'Status',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
        ];
    }
}
