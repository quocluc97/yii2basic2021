<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "warehouse".
 *
 * @property int $id
 * @property int $project_id
 * @property string $name
 * @property string|null $area
 * @property string|null $address
 * @property int $type 1: kho chinh, 2: kho ao
 * @property int|null $stoker_id
 * @property float|null $lat
 * @property float|null $lng
 * @property int|null $warehouse_parent_id
 * @property int $percent ti le an chia voi kho tong; 0 la kho tong
 * @property int $status
 * @property int|null $created_at
 * @property int|null $province_id
 * @property int|null $agency_id
 * @property string|null $phone
 *
 * @property Command[] $commands
 * @property Command[] $commands0
 * @property PlanAllocationDetail[] $planAllocationDetails
 * @property PlanAllocationDetail[] $planAllocationDetails0
 */
class Warehouse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warehouse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'name'], 'required'],
            [['project_id', 'type', 'stoker_id', 'warehouse_parent_id', 'percent', 'status', 'created_at', 'province_id', 'agency_id'], 'integer'],
            [['lat', 'lng'], 'number'],
            [['name', 'area', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
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
            'name' => 'Name',
            'area' => 'Area',
            'address' => 'Address',
            'type' => 'Type',
            'stoker_id' => 'Stoker ID',
            'lat' => 'Lat',
            'lng' => 'Lng',
            'warehouse_parent_id' => 'Warehouse Parent ID',
            'percent' => 'Percent',
            'status' => 'Status',
            'created_at' => 'Created At',
            'province_id' => 'Province ID',
            'agency_id' => 'Agency ID',
            'phone' => 'Phone',
        ];
    }

    /**
     * Gets query for [[Commands]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommands()
    {
        return $this->hasMany(Command::className(), ['warehouse_from_id' => 'id']);
    }

    /**
     * Gets query for [[Commands0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommands0()
    {
        return $this->hasMany(Command::className(), ['warehouse_to_id' => 'id']);
    }

    /**
     * Gets query for [[PlanAllocationDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanAllocationDetails()
    {
        return $this->hasMany(PlanAllocationDetail::className(), ['warehouse_from_id' => 'id']);
    }

    /**
     * Gets query for [[PlanAllocationDetails0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlanAllocationDetails0()
    {
        return $this->hasMany(PlanAllocationDetail::className(), ['warehouse_to_id' => 'id']);
    }
}
