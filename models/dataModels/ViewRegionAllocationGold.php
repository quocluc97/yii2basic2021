<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "view_region_allocation_gold".
 *
 * @property int|null $region_id
 * @property int|null $allocate_gold
 * @property float|null $gold
 */
class ViewRegionAllocationGold extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'view_region_allocation_gold';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['region_id', 'allocate_gold'], 'integer'],
            [['gold'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'region_id' => 'Region ID',
            'allocate_gold' => 'Allocate Gold',
            'gold' => 'Gold',
        ];
    }
}
