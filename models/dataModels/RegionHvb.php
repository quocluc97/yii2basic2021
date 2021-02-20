<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "region_hvb".
 *
 * @property int $id
 * @property string $name
 * @property string|null $note
 * @property int|null $status
 * @property int|null $allocate_gold
 * @property int|null $allocate_gold_max
 */
class RegionHvb extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region_hvb';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['note'], 'string'],
            [['status', 'allocate_gold', 'allocate_gold_max'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'note' => 'Note',
            'status' => 'Status',
            'allocate_gold' => 'Allocate Gold',
            'allocate_gold_max' => 'Allocate Gold Max',
        ];
    }
}
