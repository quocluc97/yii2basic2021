<?php

namespace app\modules\sa\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sa\models\User as UserModel;

/**
 * User represents the model behind the search form of `app\modules\sa\models\User`.
 */
class User extends UserModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status', 'work_shift', 'role', 'number_sp', 'created_at', 'province_id'], 'integer'],
            [['username', 'auth_key', 'password_hash', 'access_token', 'device_id', 'display_name', 'version'], 'safe'],
            [['is_login', 'is_admin_master'], 'boolean'],
        ];
    }
    
    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UserModel::find();
        
        // add conditions that should always apply here
        
        $dataProvider = new ActiveDataProvider(
            [
                'query' => $query,
            ]
        );
        
        $this->load($params);
        
        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }
        
        // grid filtering conditions
        $query->andFilterWhere(
            [
                'id' => $this->id,
                'is_login' => $this->is_login,
                'status' => $this->status,
                'work_shift' => $this->work_shift,
                'role' => $this->role,
                'number_sp' => $this->number_sp,
                'created_at' => $this->created_at,
                'province_id' => $this->province_id,
                'is_admin_master' => $this->is_admin_master,
            ]
        );
        
        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'password_hash', $this->password_hash])
            ->andFilterWhere(['like', 'access_token', $this->access_token])
            ->andFilterWhere(['like', 'device_id', $this->device_id])
            ->andFilterWhere(['like', 'display_name', $this->display_name])
            ->andFilterWhere(['like', 'version', $this->version]);
        
        return $dataProvider;
    }
}
