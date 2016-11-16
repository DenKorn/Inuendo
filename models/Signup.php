<?php

namespace app\models;

use yii\base\Model;

class Signup extends Model
{
    public $name;
    public $login;
    public $password;

    public function rules()
    {
        return [

            [['name','login','password'],'required'],
            ['name','string','min'=>2,'max'=>10],
            ['login','email'],
            ['login','unique','targetClass'=>'app\models\User'],
            ['password','string','min'=>2,'max'=>10]
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->name = $this->name;
        $user->login = $this->login;
        $user->setPassword($this->password);
        return $user->save(); //вернет true или false
    }

}