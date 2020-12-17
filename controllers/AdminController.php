<?php


namespace app\controllers;


class AdminController extends AppController
{

    public function actionIndex ()
    {
        return $this->render('index');
    }

}