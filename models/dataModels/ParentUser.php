<?php

namespace app\models\dataModels;

use Yii;

/**
 * This is the model class for table "parent_user".
 *
 * @property int $id
 * @property int $user_id
 * @property int $parent_user_id
 * @property int $type
 * @property int $status
 * @property int|null $created_at
 *
 * @property User $user
 * @property User $parentUser
 */
class ParentUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parent_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'parent_user_id', 'type'], 'required'],
            [['user_id', 'parent_user_id', 'type', 'status', 'created_at'], 'integer'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['parent_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['parent_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'parent_user_id' => 'Parent User ID',
            'type' => 'Type',
            'status' => 'Status',
            'created_at' => 'Created At',
        ];
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
     * Gets query for [[ParentUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParentUser()
    {
        return $this->hasOne(User::className(), ['id' => 'parent_user_id']);
    }
}
