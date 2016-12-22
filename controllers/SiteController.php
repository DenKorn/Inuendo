<?php

namespace app\controllers;


use Faker\Provider\cs_CZ\DateTime;
use Yii;
use yii\web\Controller;
use app\models\Signup;
use app\models\Login;


class SiteController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'no_header.php'; //установка шаблона, не имеющего хедера
        return $this->render('index');
    }

    public function actionStub($publishdate) //время, на которое понадобится установить таймер ("2016-11-11 12:00:00")
    {
        //test link: http://localhost/Inuendo/web/site/stub?publishdate=2016-12-29 12:00:00
        return $this->renderPartial('stub',["publishDate" => $publishdate]);
    }

    public function actionLogout()
    {
        if (!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
            return $this->redirect(['login']);
        }
    }

    public function actionSignup()
    {
        $model = new Signup();

        if (isset($_POST['Signup'])) {
            $model->attributes = Yii::$app->request->post('Signup');

            if ($model->validate() && $model->signup()) {
                return $this->redirect(['login']);
            }
        }
        return $this->render('signup', ['model' => $model]);
    }

    //1. Проверить существует ли пользователь
    //2. Внести пользователя в систему

    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }

        $login_model = new Login();

        if( Yii::$app->request->post('Login'))
        {
            $login_model->attributes = Yii::$app->request->post('Login');

            if($login_model->validate())
            {
                Yii::$app->user->login($login_model->getUser());
                return $this->redirect(['mainpage']);
            }
        }

        return $this->render('login',['login_model'=>$login_model]);
    }



}
