<?php

namespace app\controllers;

class EditorController extends \yii\web\Controller
{
    public function actionCreateAd()
    {
        return $this->render('create-ad');
    }

    public function actionDeleteAd()
    {
        return $this->render('delete-ad');
    }

    public function actionEditAd()
    {
        return $this->render('edit-ad');
    }

    public function actionIndex()
    {
        $this->layout = 'no_header.php';
        return $this->render('index');
    }

}
