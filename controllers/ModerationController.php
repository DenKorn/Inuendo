<?php

namespace app\controllers;

class ModerationController extends \yii\web\Controller
{
    public function actionBanUser()
    {
        return $this->render('ban-user');
    }

    public function actionChangeBanPeriod()
    {
        return $this->render('change-ban-period');
    }

    public function actionGetAds()
    {
        return $this->render('get-ads');
    }

    public function actionGetBanList()
    {
        return $this->render('get-ban-list');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionResolveAd()
    {
        return $this->render('resolve-ad');
    }

    public function actionUnbanUser()
    {
        return $this->render('unban-user');
    }

}
