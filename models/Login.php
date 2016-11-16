<?php

namespace app\models;

use yii\base\Model;

class Login extends Model
{
    public $name;
    public $login;
    public $password;


    public function rules()
    {
        return [

            [['name','login','password'],'required'],
            ['name','string'],
            ['login','email'],
            ['password','validatePassword'] //функция для валидации пароля
        ];
    }

    public function validatePassword($attribute,$params)
    {
        if(!$this->hasErrors()) // если нет ошибок в валидации
        {
            $user = $this->getUser(); // получаем пользователя для дальнейшего сравнения пароля

            if(!$user || !$user->validatePassword($this->password))
            {
                //если мы НЕ нашли в базе такого пользователя
                //или введенный пароль и пароль пользователя в базе != то,
                $this->addError($attribute,'Имя, пароль или имейл введены неверно');
                //добавляем новую ошибку для атрибута password о том что пароль или логин введены не верно
            }
        }
    }

    public function getUser()
    {
        return User::findOne(['login'=>$this->login]); // из поля "логин"
    }


}