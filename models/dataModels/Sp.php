<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sp".
 *
 * @property int $id
 * @property string $code
 * @property string $full_name
 * @property string $phone
 * @property string|null $address
 * @property int|null $avatar_id
 * @property int $province_id
 * @property int|null $created_by
 * @property int $status
 * @property int|null $created_at
 * @property string|null $day_of_birth
 * @property int|null $type
 * @property int|null $user_id
 *
 * @property CheckInOutSp[] $checkInOutSps
 * @property Image $avatar
 * @property User $createdBy
 * @property Province $province
 * @property User $user
 * @property SpRating[] $spRatings
 */
class Sp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'full_name', 'phone', 'province_id'], 'required'],
            [['avatar_id', 'province_id', 'created_by', 'status', 'created_at', 'type', 'user_id'], 'integer'],
            [['day_of_birth'], 'safe'],
            [['code', 'full_name', 'address'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 20],
            [['avatar_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['avatar_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
            [['province_id'], 'exist', 'skipOnError' => true, 'targetClass' => Province::className(), 'targetAttribute' => ['province_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'full_name' => 'Full Name',
            'phone' => 'Phone',
            'address' => 'Address',
            'avatar_id' => 'Avatar ID',
            'province_id' => 'Province ID',
            'created_by' => 'Created By',
            'status' => 'Status',
            'created_at' => 'Created At',
            'day_of_birth' => 'Day Of Birth',
            'type' => 'Type',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[CheckInOutSps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCheckInOutSps()
    {
        return $this->hasMany(CheckInOutSp::className(), ['sp_id' => 'id']);
    }

    /**
     * Gets query for [[Avatar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAvatar()
    {
        return $this->hasOne(Image::className(), ['id' => 'avatar_id']);
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[SpRatings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSpRatings()
    {
        return $this->hasMany(SpRating::className(), ['sp_id' => 'id']);
    }
}
