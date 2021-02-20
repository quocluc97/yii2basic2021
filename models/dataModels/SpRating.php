<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "sp_rating".
 *
 * @property int $id
 * @property int $sp_id
 * @property string $rating_name
 * @property string $rating_message
 * @property int $rating_point
 * @property int|null $status
 * @property int|null $created_at
 * @property string|null $ip
 *
 * @property Sp $sp
 */
class SpRating extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sp_rating';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sp_id', 'rating_name', 'rating_message', 'rating_point'], 'required'],
            [['sp_id', 'rating_point', 'status', 'created_at'], 'integer'],
            [['rating_message'], 'string'],
            [['rating_name', 'ip'], 'string', 'max' => 255],
            [['sp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sp::className(), 'targetAttribute' => ['sp_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sp_id' => 'Sp ID',
            'rating_name' => 'Rating Name',
            'rating_message' => 'Rating Message',
            'rating_point' => 'Rating Point',
            'status' => 'Status',
            'created_at' => 'Created At',
            'ip' => 'Ip',
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
}
