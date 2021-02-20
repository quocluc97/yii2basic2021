<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "province".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $showinhome
 * @property int|null $order
 *
 * @property Outlet[] $outlets
 * @property Sp[] $sps
 */
class Province extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'province';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['showinhome', 'order'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'showinhome' => 'Showinhome',
            'order' => 'Order',
        ];
    }

    /**
     * Gets query for [[Outlets]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOutlets()
    {
        return $this->hasMany(Outlet::className(), ['province_id' => 'id']);
    }

    /**
     * Gets query for [[Sps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSps()
    {
        return $this->hasMany(Sp::className(), ['province_id' => 'id']);
    }
}
