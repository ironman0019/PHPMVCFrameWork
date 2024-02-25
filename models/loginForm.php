<?php

namespace App\models;

use App\core\Application;
use App\core\Model;

class LoginForm extends Model {

    public string $email = '';
    public string $password = '';

    public function rules(): array
    {
        return [

            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED]

        ];
    }

    public function labels(): array
    {
        return [
            'email' => 'Your Email',
            'password' => 'Password'
        ];
    }

    public function login()
    {
        $user = RegisterModal::findOne(['email' => $this->email]);
        if (!$user) {
            $this->addError('email', 'user does not exist with this email');
            return false;
        }
        if (!password_verify($this->password, $user->password)) {
            $this->addError('password', 'password is incorrect');
            return false;
        }

        

        return Application::$app->login($user);
    }


}