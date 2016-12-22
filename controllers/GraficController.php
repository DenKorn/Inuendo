<?php
/**
 * Created by PhpStorm.
 * User: Alwx_Mason
 * Date: 12/22/2016
 * Time: 3:36 AM
 */

namespace app\controllers;


class GraficController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->layout = 'no_header.php';
        return $this->render('grafic');
    }

}