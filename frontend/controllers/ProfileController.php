<?php

namespace frontend\controllers;
use frontend\models\UserInfo;
use Yii;

class ProfileController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $info = Yii::$app->user->id;

        $user = UserInfo::find()->all();
        return $this->render('index',compact('user'));
    }

    public function actionUpdate($id)
    {
        $model = UserInfo::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success','info updated');
            return $this->redirect(['profile/update']);
        }
        return $this->render('update',['model'=>$model,]);
    }

}
