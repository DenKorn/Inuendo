<?php

namespace app\controllers;

use Yii;
use yii\web\Response;

class AdvertisementController extends \yii\web\Controller
{
    public function actionGotoAdSubject()
    {
        //todo запись в бд об условном окончании просмотра рекламы и о факте перехода по ней
        //todo перенаправление пользователя по целевой ссылке
        return 0;
    }

    //Получение фрейма для отображения реклам
    public function actionIndex($id)
    {
        //Yii::$app->response->set
        $adConfig = '{}';
        return $this->renderPartial('index',['id' => $id, 'adConfig' => $adConfig]);
    }

    //загрузка структуры рекламы, обьектов переходов и экшнов, все ссылки на файлы абсолютны
    public function actionLoadAd()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        return [];
    }

    //обновление прогресса просмотра рекламы. Если выполнен переход по ссылке - так же вызывается.
    public function actionUpdateWatchProgress()
    {
        //функция для POST-запроса, ответ - флаг успеха обновления прогресса.
        // В случае неуспеха запрос на обновление будет отправлен заново
        return 0;
    }

}
