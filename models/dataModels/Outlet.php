<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "outlet".
 *
 * @property int $id
 * @property string|null $code
 * @property string $name
 * @property int $channel_id
 * @property int $province_id
 * @property string|null $address
 * @property int|null $status
 * @property int|null $created_at
 * @property bool|null $is_promotion
 * @property bool|null $is_second_tiger
 * @property bool $is_gold
 *
 * @property CheckInOutSup[] $checkInOutSups
 * @property NotificationGroup[] $notificationGroups
 * @property Province $province
 * @property Channel $channel
 */
class Outlet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'outlet';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'channel_id', 'province_id'], 'required'],
            [['channel_id', 'province_id', 'status', 'created_at'], 'integer'],
            [['is_promotion', 'is_second_tiger', 'is_gold'], 'boolean'],
            [['code', 'name', 'address'], 'string', 'max' => 255],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
            [['channel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Channel::className(), 'targetAttribute' => ['channel_id' => 'id']],
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
            'channel_id' => 'Channel ID',
            'province_id' => 'Province ID',
            'address' => 'Address',
            'status' => 'Status',
            'created_at' => 'Created At',
            'is_promotion' => 'Is Promotion',
            'is_second_tiger' => 'Is Second Tiger',
            'is_gold' => 'Is Gold',
        ];
    }

    /**
     * Gets query for [[CheckInOutSups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSups()
    {
        return $this->hasMany(CheckInOutSup::className(), ['outlet_id' => 'id']);
    }

    /**
     * Gets query for [[NotificationGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotificationGroups()
    {
        return $this->hasMany(NotificationGroup::className(), ['outlet_id' => 'id']);
    }

    /**
     * Gets query for [[Province]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }

    /**
     * Gets query for [[Channel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getChannel()
    {
        return $this->hasOne(Channel::className(), ['id' => 'channel_id']);
    }
}
