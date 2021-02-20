<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "project_outlet".
 *
 * @property int $id
 * @property int $project_id
 * @property int $outlet_id
 * @property int $agency
 * @property int $status
 * @property int|null $created_at
 * @property int|null $gold
 *
 * @property BrandSetOutlet[] $brandSetOutlets
 * @property CheckInOutSp[] $checkInOutSps
 * @property CommandGift[] $commandGifts
 * @property Customer[] $customers
 * @property GroupOutlet[] $groupOutlets
 * @property Oos[] $oos
 * @property OosProductLevel[] $oosProductLevels
 * @property Otv[] $otvs
 * @property OutletOnline[] $outletOnlines
 * @property OutletOntopConfirm[] $outletOntopConfirms
 * @property OutletOntopConfirm[] $outletOntopConfirms0
 * @property PosmOutlet[] $posmOutlets
 */
class ProjectOutlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project_outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'outlet_id', 'agency'], 'required'],
            [['project_id', 'outlet_id', 'agency', 'status', 'created_at', 'gold'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'outlet_id' => 'Outlet ID',
            'agency' => 'Agency',
            'status' => 'Status',
            'created_at' => 'Created At',
            'gold' => 'Gold',
        ];
    }

    /**
     * Gets query for [[BrandSetOutlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrandSetOutlets()
    {
        return $this->hasMany(BrandSetOutlet::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[CheckInOutSps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSps()
    {
        return $this->hasMany(CheckInOutSp::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[CommandGifts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandGifts()
    {
        return $this->hasMany(CommandGift::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[Customers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomers()
    {
        return $this->hasMany(Customer::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[GroupOutlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getGroupOutlets()
    {
        return $this->hasMany(GroupOutlet::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[Oos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOos()
    {
        return $this->hasMany(Oos::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[OosProductLevels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOosProductLevels()
    {
        return $this->hasMany(OosProductLevel::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[Otvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtvs()
    {
        return $this->hasMany(Otv::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[OutletOnlines]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutletOnlines()
    {
        return $this->hasMany(OutletOnline::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[OutletOntopConfirms]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutletOntopConfirms()
    {
        return $this->hasMany(OutletOntopConfirm::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[OutletOntopConfirms0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutletOntopConfirms0()
    {
        return $this->hasMany(OutletOntopConfirm::className(), ['project_outlet_id' => 'id']);
    }

    /**
     * Gets query for [[PosmOutlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosmOutlets()
    {
        return $this->hasMany(PosmOutlet::className(), ['project_outlet_id' => 'id']);
    }
}
