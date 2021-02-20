<?php

namespace app\modules\sa\controllers;

use app\helpers\Common;
use Yii;
use app\modules\sa\models\User;
use app\modules\sa\search\User as UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\Response;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    
    public function actionIndex()
    {
        if (Yii::$app->request->isPost && Yii::$app->request->post('hasEditable')) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $POST = Yii::$app->request->post();
            $modelName = basename(User::class);
            $value = $POST[$modelName][$POST['editableIndex']][$POST['editableAttribute']] ?? null;
            $model = User::findOne(
                [
                    'id' => $POST['editableKey'] ?? null
                ]
            );
            if ($model === null) {
                return ['output' => '', 'message' => 'Không tìm thấy dữ liệu'];
            }
            $model->{$POST['editableAttribute']} = $value;
            if ($model->save()) {
                return ['output' => $value, 'message' => ''];
            }
            return ['output' => '', 'message' => Common::getErrorFromModel($model)];
        }
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render(
            'index',
            [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]
        );
    }
    
    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render(
            'view',
            [
                'model' => $this->findModel($id),
            ]
        );
    }
    
    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        
        return $this->render(
            'create',
            [
                'model' => $model,
            ]
        );
    }
    
    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
        
        return $this->render(
            'update',
            [
                'model' => $model,
            ]
        );
    }
    
    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        return $this->redirect(['index']);
    }
    
    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        }
        
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
