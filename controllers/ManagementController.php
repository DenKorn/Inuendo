<?php

namespace app\controllers;

class ManagementController extends \yii\web\Controller
{
    public function actionCreatePlatform()
    {
        return $this->render('create-platform');
    }

    public function actionDeletePlatform()
    {
        return $this->render('delete-platform');
    }

    public function actionGetPlatform()
    {
        return $this->render('get-platform');
    }

    public function actionGetPlatformsList()
    {
        return $this->render('get-platforms-list');
    }

    public function actionIndex()
    {
        $this->layout = "header_admin";
        return $this->render('index');
    }

    public function actionUpdatePlatform()
    {
        return $this->render('update-platform');
    }

}
