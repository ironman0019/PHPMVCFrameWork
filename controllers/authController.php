<?php

namespace App\controllers;

use App\core\Application;
use App\core\Controller;
use App\core\middlewares\AuthMiddleware;
use App\core\Request;
use App\core\Response;
use App\models\LoginForm;
use App\models\RegisterModal;

class AuthController extends Controller {

    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }

    public function login(Request $request, Response $response)
    {   
        $loginForm = new LoginForm;

        if ($request->getMethod() === 'post') {

            $loginForm->loadData($request->getBody());

            if ($loginForm->validate() && $loginForm->login()) {
                $response->redirect('/');
            }

        }

        $this->setLayout('auth');
        return $this->render('login', ['model' => $loginForm]);
    }

    public function register(Request $request)
    {   
        $registerModel = new RegisterModal();

        if($request->getMethod() === 'post') {

            $registerModel->loadData($request->getBody());


            if($registerModel->validate() && $registerModel->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering !');
                Application::$app->response->redirect('/');
            }


            
            return $this->render('register' , [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    } 

    public function profile()
    {
        return $this->render('profile');
    }
    
    public function logout(Request $request, Response $response)
    {
        Application::$app->logOut();
        $response->redirect('/');
    }
}