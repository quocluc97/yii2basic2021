<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "posm_outlet_detail".
 *
 * @property int $id
 * @property int $posm_outlet_id
 * @property int $posm_id
 * @property int $qty
 *
 * @property PosmOutlet $posmOutlet
 * @property Posm $posm
 */
class PosmOutletDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'posm_outlet_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['posm_outlet_id', 'posm_id'], 'required'],
            [['posm_outlet_id', 'posm_id', 'qty'], 'integer'],
            [['posm_outlet_id'], 'exist', 'skipOnError' => true, 'targetClass' => PosmOutlet::className(), 'targetAttribute' => ['posm_outlet_id' => 'id']],
            [['posm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Posm::className(), 'targetAttribute' => ['posm_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'posm_outlet_id' => 'Posm Outlet ID',
            'posm_id' => 'Posm ID',
            'qty' => 'Qty',
        ];
    }

    /**
     * Gets query for [[PosmOutlet]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosmOutlet()
    {
        return $this->hasOne(PosmOutlet::className(), ['id' => 'posm_outlet_id']);
    }

    /**
     * Gets query for [[Posm]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPosm()
    {
        return $this->hasOne(Posm::className(), ['id' => 'posm_id']);
    }
}
