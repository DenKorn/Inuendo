<?php

namespace app\models;

use yii\base\Model;

class Signup extends Model
{
    public $login;
    public $password;

    public function rules()
    {
        return [
            [['login', 'password'],'required'],
            ['login','email'],
            ['login','unique','targetClass'=>'app\models\Users'],
            ['password','string','min'=>6,'max'=>10]
        ];
    }

    public function signup()
    {
        $users = new Users();
        $users->login = $this->login;
        $users->setPassword($this->password);
        return $users->save(); //true | false
    }
}