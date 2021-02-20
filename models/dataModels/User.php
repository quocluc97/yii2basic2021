<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $access_token
 * @property string|null $device_id
 * @property string $display_name
 * @property bool $is_login
 * @property int $status
 * @property int $work_shift
 * @property int|null $role
 * @property int|null $number_sp
 * @property int $created_at
 * @property int|null $province_id
 * @property bool $is_admin_master
 * @property string|null $version
 *
 * @property CheckInOutSp[] $checkInOutSps
 * @property CheckInOutSup[] $checkInOutSups
 * @property CommandCustomerReason[] $commandCustomerReasons
 * @property CommandGift[] $commandGifts
 * @property Notification[] $notifications
 * @property Oos[] $oos
 * @property OosProductLevel[] $oosProductLevels
 * @property Otv[] $otvs
 * @property ParentUser[] $parentUsers
 * @property ParentUser[] $parentUsers0
 * @property PosmOutlet[] $posmOutlets
 * @property Sp[] $sps
 * @property Sp[] $sps0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'display_name', 'created_at'], 'required'],
            [['is_login', 'is_admin_master'], 'boolean'],
            [['status', 'work_shift', 'role', 'number_sp', 'created_at', 'province_id'], 'integer'],
            [['username', 'password_hash', 'access_token', 'device_id', 'display_name', 'version'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'access_token' => 'Access Token',
            'device_id' => 'Device ID',
            'display_name' => 'Display Name',
            'is_login' => 'Is Login',
            'status' => 'Status',
            'work_shift' => 'Work Shift',
            'role' => 'Role',
            'number_sp' => 'Number Sp',
            'created_at' => 'Created At',
            'province_id' => 'Province ID',
            'is_admin_master' => 'Is Admin Master',
            'version' => 'Version',
        ];
    }

    /**
     * Gets query for [[CheckInOutSps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSps()
    {
        return $this->hasMany(CheckInOutSp::className(), ['created_by' => 'id']);
    }

    /**
     * Gets query for [[CheckInOutSups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSups()
    {
        return $this->hasMany(CheckInOutSup::className(), ['sup_id' => 'id']);
    }

    /**
     * Gets query for [[CommandCustomerReasons]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandCustomerReasons()
    {
        return $this->hasMany(CommandCustomerReason::className(), ['created_by' => 'id']);
    }

    /**
     * Gets query for [[CommandGifts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCommandGifts()
    {
        return $this->hasMany(CommandGift::className(), ['user_receive_id' => 'id']);
    }

    /**
     * Gets query for [[Notifications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotifications()
    {
        return $this->hasMany(Notification::className(), ['created_by' => 'id']);
    }

    /**
     * Gets query for [[Oos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOos()
    {
        return $this->hasMany(Oos::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[OosProductLevels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOosProductLevels()
    {
        return $this->hasMany(OosProductLevel::className(), ['created_by' => 'id']);
    }

    /**
     * Gets query for [[Otvs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtvs()
    {
        return $this->hasMany(Otv::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[ParentUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParentUsers()
    {
        return $this->hasMany(ParentUser::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[ParentUsers0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParentUsers0()
    {
        return $this->hasMany(ParentUser::className(), ['parent_user_id' => 'id']);
    }

    /**
     * Gets query for [[PosmOutlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosmOutlets()
    {
        return $this->hasMany(PosmOutlet::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Sps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSps()
    {
        return $this->hasMany(Sp::className(), ['created_by' => 'id']);
    }

    /**
     * Gets query for [[Sps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSps0()
    {
        return $this->hasMany(Sp::className(), ['user_id' => 'id']);
    }
}
