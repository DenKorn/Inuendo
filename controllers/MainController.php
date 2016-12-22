<?php
/**
 * Created by PhpStorm.
 * User: Alwx_Mason
 * Date: 12/22/2016
 * Time: 2:38 AM
 */

namespace app\controllers;


class MainController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'header_admin.php';
        return $this->render('main');
    }

}