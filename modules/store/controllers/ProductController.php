<?php

namespace app\modules\store\controllers;

use yii\web\Controller;

class ProductController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
