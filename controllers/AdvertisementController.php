<?php

namespace app\controllers;

class AdvertisementController extends \yii\web\Controller
{
    public function actionGotoAdSubject()
    {
        return $this->render('goto-ad-subject');
    }

    //Получение фрейма для отображения реклам
    public function actionIndex()
    {
        return $this->render('index');
    }

    //загрузка структуры рекламы, обьектов переходов и экшнов, все ссылки на файлы абсолютны
    public function actionLoadAd()
    {
        return $this->render('load-ad-fragment');
    }

    //обновление прогресса просмотра рекламы. Если выполнен переход по ссылке - так же вызывается.
    public function actionUpdateWatchProgress()
    {
        return $this->render('update-watch-progress');
    }

}
