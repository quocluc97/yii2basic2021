<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "check_in_out_sup".
 *
 * @property int $id
 * @property int $project_id
 * @property int $sup_id
 * @property int $outlet_id
 * @property int $time_in
 * @property float $lat_in
 * @property float $lng_in
 * @property int|null $image_in_id
 * @property int|null $time_out
 * @property float|null $lat_out
 * @property float|null $lng_out
 * @property int|null $image_out_id
 * @property int|null $created_at
 *
 * @property Project $project
 * @property User $sup
 * @property Image $imageIn
 * @property Image $imageOut
 * @property Outlet $outlet
 */
class CheckInOutSup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'check_in_out_sup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'sup_id', 'outlet_id', 'time_in', 'lat_in', 'lng_in'], 'required'],
            [['project_id', 'sup_id', 'outlet_id', 'time_in', 'image_in_id', 'time_out', 'image_out_id', 'created_at'], 'integer'],
            [['lat_in', 'lng_in', 'lat_out', 'lng_out'], 'number'],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'id']],
            [['sup_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['sup_id' => 'id']],
            [['image_in_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_in_id' => 'id']],
            [['image_out_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::className(), 'targetAttribute' => ['image_out_id' => 'id']],
            [['outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Outlet::className(), 'targetAttribute' => ['outlet_id' => 'id']],
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
            'sup_id' => 'Sup ID',
            'outlet_id' => 'Outlet ID',
            'time_in' => 'Time In',
            'lat_in' => 'Lat In',
            'lng_in' => 'Lng In',
            'image_in_id' => 'Image In ID',
            'time_out' => 'Time Out',
            'lat_out' => 'Lat Out',
            'lng_out' => 'Lng Out',
            'image_out_id' => 'Image Out ID',
            'created_at' => 'Created At',
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
     * Gets query for [[Sup]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSup()
    {
        return $this->hasOne(User::className(), ['id' => 'sup_id']);
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
     * Gets query for [[Outlet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutlet()
    {
        return $this->hasOne(Outlet::className(), ['id' => 'outlet_id']);
    }
}
