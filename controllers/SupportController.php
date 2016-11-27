<?php

namespace app\controllers;

class SupportController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = "header_admin";
        return $this->render('index');
    }

    public function actionLoadDialog()
    {
        return $this->render('load-dialog');
    }

    public function actionLoadDialogsList()
    {
        return $this->render('load-dialogs-list');
    }

    public function actionSendRequest()
    {
        return $this->render('send-request');
    }

    public function actionSendRespond()
    {
        return $this->render('send-respond');
    }

}
