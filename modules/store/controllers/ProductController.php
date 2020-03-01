<?php

namespace app\modules\store\controllers;

use yii\web\Controller;
use Yii;

class ProductController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if (Yii::$app->request->isGet) {
            $param = '';
            foreach (Yii::$app->request->get() as $key => $value) {
                $param .= $key . '=' . $value . ' ';
            }
            return $param;
        }
    }

    public function actionCreate()
    {
        if (Yii::$app->request->isPost) {
            return 'create product';
        } else {
            return 'product not created';
        }

    }
}
