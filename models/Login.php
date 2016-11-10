<?php

namespace app\models;

use yii\base\Model;

class Login extends Model
{
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['login','password'],'required'],
            ['login','email'],
            ['password','validatePassword']
        ];
    }

    public function validatePassword($attribute,$params)
    {
        if (!$this->hasErrors())
        {
            $users = $this->getUser();

            if (!$users || !$users->validatePassword($this->password))
            {
                $this->addError($attribute,'Пароль или email введены неверно');
            }
        }
    }

        public function getUser()
        {
            return Users::findOne(['login'=>$this->login]);
        }
}