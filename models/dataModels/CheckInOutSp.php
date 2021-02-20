<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "check_in_out_sp".
 *
 * @property int $id
 * @property int $project_outlet_id
 * @property int $sp_id
 * @property int $time_in
 * @property float $lat_in
 * @property float $lng_in
 * @property int|null $image_in_id
 * @property int|null $time_out
 * @property float|null $lat_out
 * @property float|null $lng_out
 * @property int|null $image_out_id
 * @property int $created_by
 * @property int|null $created_at
 *
 * @property Sp $sp
 * @property Image $imageIn
 * @property Image $imageOut
 * @property ProjectOutlet $projectOutlet
 * @property User $createdBy
 */
class CheckInOutSp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'check_in_out_sp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_outlet_id', 'sp_id', 'time_in', 'lat_in', 'lng_in', 'created_by'], 'required'],
            [['project_outlet_id', 'sp_id', 'time_in', 'image_in_id', 'time_out', 'image_out_id', 'created_by', 'created_at'], 'integer'],
            [['lat_in', 'lng_in', 'lat_out', 'lng_out'], 'number'],
            [['sp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sp::className(), 'targetAttribute' => ['sp_id' => 'id']],
            [['image_in_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_in_id' => 'id']],
            [['image_out_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_out_id' => 'id']],
            [['project_outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectOutlet::className(), 'targetAttribute' => ['project_outlet_id' => 'id']],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_outlet_id' => 'Project Outlet ID',
            'sp_id' => 'Sp ID',
            'time_in' => 'Time In',
            'lat_in' => 'Lat In',
            'lng_in' => 'Lng In',
            'image_in_id' => 'Image In ID',
            'time_out' => 'Time Out',
            'lat_out' => 'Lat Out',
            'lng_out' => 'Lng Out',
            'image_out_id' => 'Image Out ID',
            'created_by' => 'Created By',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Sp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSp()
    {
        return $this->hasOne(Sp::className(), ['id' => 'sp_id']);
    }

    /**
     * Gets query for [[ImageIn]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImageIn()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_in_id']);
    }

    /**
     * Gets query for [[ImageOut]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImageOut()
    {
        return $this->hasOne(Image::className(), ['id' => 'image_out_id']);
    }

    /**
     * Gets query for [[ProjectOutlet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProjectOutlet()
    {
        return $this->hasOne(ProjectOutlet::className(), ['id' => 'project_outlet_id']);
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
}
