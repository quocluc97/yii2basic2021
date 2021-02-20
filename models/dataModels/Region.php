<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string|null $note
 * @property int|null $status
 *
 * @property AgencyRegion[] $agencyRegions
 * @property BrandSetProject[] $brandSetProjects
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
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
            [['name'], 'unique'],
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
     * Gets query for [[AgencyRegions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgencyRegions()
    {
        return $this->hasMany(AgencyRegion::className(), ['region_id' => 'id']);
    }

    /**
     * Gets query for [[BrandSetProjects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetProjects()
    {
        return $this->hasMany(BrandSetProject::className(), ['region_id' => 'id']);
    }
}
