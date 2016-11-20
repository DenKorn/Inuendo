<?php

namespace app\controllers;

class ProfileController extends \yii\web\Controller
{
    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {
        $this->layout = "header_public.php";
        //for test
        $testMode = 1;
        switch ($testMode) {
            case 1 :
                return $this->render("profile_foreign");
            case 2 :
                return $this->render("profile_own");
        }
        ////

        return 0;
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
