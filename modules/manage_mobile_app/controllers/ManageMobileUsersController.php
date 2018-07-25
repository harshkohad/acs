<?php

namespace app\modules\manage_mobile_app\controllers;

use Yii;
use app\modules\manage_mobile_app\models\TblMobileUsers;
use app\modules\manage_mobile_app\models\TblMobileUsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use mdm\admin\models\UserDetails;
use app\modules\api\modules\v1\models\TblOauthAccessTokens;

/**
 * ManageMobileUsersController implements the CRUD actions for TblMobileUsers model.
 */
class ManageMobileUsersController extends Controller {

    /**
     * @inheritdoc
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all TblMobileUsers models.
     * @return mixed
     */
    public function actionIndex() {
        $searchModel = new TblMobileUsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblMobileUsers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id) {
        return $this->render('view', [
                    'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TblMobileUsers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate() {
        $model = new TblMobileUsers();

        $sql = "SELECT u.id, CONCAT(ud.first_name, ' ', ud.last_name) as username FROM user u INNER JOIN tbl_user_details ud ON ud.user_id = u.id ORDER BY username";
        $userData = \Yii::$app->db->createCommand($sql)->queryAll();

        /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->id]);
          } */
        if ($model->load(Yii::$app->request->post())) {
            $data = Yii::$app->request->post();

            $id = $data['TblMobileUsers']['user_id'];
            $mobile_unique_code = $data['TblMobileUsers']['mobile_unique_code'];

            $mobile_details = TblMobileUsers::find()->where(['user_id' => $id])->one();

            if (empty($mobile_details)) {
                $user_details = UserDetails::find()->where(['user_id' => $id])->one();

                $agent_name = $user_details['first_name'] . ' ' . $user_details['last_name'];
                $model->field_agent_name = $agent_name;
                $model->save();
            } else {
                Yii::$app->getSession()->setFlash('error', 'User already added.');
            }

            //die('sdfdsu');
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                        'model' => $model,
                        "userData" => $userData,
            ]);
        }
    }

    /**
     * Updates an existing TblMobileUsers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id) {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                        'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TblMobileUsers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id) {
        $this->findModel($id)->delete();
        
        //Delete Access Token
        $this->deleteUserData($id);

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblMobileUsers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TblMobileUsers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = TblMobileUsers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public function deleteUserData($id) {
        
        $access_token = TblOauthAccessTokens::findOne(['user_id' => $id]);
        $access_token->delete();        
    }

}
