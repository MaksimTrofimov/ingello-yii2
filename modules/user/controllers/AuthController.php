<?php

namespace app\modules\user\controllers;

use yii\web\Controller;

class AuthController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreateToken()
    {
        return 'token created';
    }
}
