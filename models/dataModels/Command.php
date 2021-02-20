<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "command".
 *
 * @property int $id
 * @property int $project_id
 * @property string|null $code
 * @property int|null $warehouse_from_id
 * @property int|null $outlet_id
 * @property int|null $warehouse_to_id
 * @property int $type
 * @property int $status
 * @property int|null $created_by
 * @property int|null $created_at
 * @property string|null $delete_reason
 *
 * @property Project $project
 * @property Warehouse $warehouseFrom
 * @property Warehouse $warehouseTo
 * @property CommandCustomer[] $commandCustomers
 * @property CommandCustomerReason[] $commandCustomerReasons
 * @property CommandDetail[] $commandDetails
 * @property CommandGift[] $commandGifts
 * @property CommandGiftDetail[] $commandGiftDetails
 */
class Command extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'command';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id'], 'required'],
            [['project_id', 'warehouse_from_id', 'outlet_id', 'warehouse_to_id', 'type', 'status', 'created_by', 'created_at'], 'integer'],
            [['delete_reason'], 'string'],
            [['code'], 'string', 'max' => 255],
            [['code'], 'unique'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['warehouse_from_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_from_id' => 'id']],
            [['warehouse_to_id'], 'exist', 'skipOnError' => true, 'targetClass' => Warehouse::className(), 'targetAttribute' => ['warehouse_to_id' => 'id']],
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
            'code' => 'Code',
            'warehouse_from_id' => 'Warehouse From ID',
            'outlet_id' => 'Outlet ID',
            'warehouse_to_id' => 'Warehouse To ID',
            'type' => 'Type',
            'status' => 'Status',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
            'delete_reason' => 'Delete Reason',
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['id' => 'project_id']);
    }

    /**
     * Gets query for [[WarehouseFrom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseFrom()
    {
        return $this->hasOne(Warehouse::className(), ['id' => 'warehouse_from_id']);
    }

    /**
     * Gets query for [[WarehouseTo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarehouseTo()
    {
        return $this->hasOne(Warehouse::className(), ['id' => 'warehouse_to_id']);
    }

    /**
     * Gets query for [[CommandCustomers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandCustomers()
    {
        return $this->hasMany(CommandCustomer::className(), ['command_id' => 'id']);
    }

    /**
     * Gets query for [[CommandCustomerReasons]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandCustomerReasons()
    {
        return $this->hasMany(CommandCustomerReason::className(), ['command_id' => 'id']);
    }

    /**
     * Gets query for [[CommandDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandDetails()
    {
        return $this->hasMany(CommandDetail::className(), ['command_id' => 'id']);
    }

    /**
     * Gets query for [[CommandGifts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandGifts()
    {
        return $this->hasMany(CommandGift::className(), ['command_id' => 'id']);
    }

    /**
     * Gets query for [[CommandGiftDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandGiftDetails()
    {
        return $this->hasMany(CommandGiftDetail::className(), ['command_id' => 'id']);
    }
}
