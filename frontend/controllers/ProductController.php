<?php
/**
 * Created by PhpStorm.
 * User: Shadow
 * Q Q : 1527200768
 * Date: 2016/11/5
 * Time: 20:07
 */

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class ProductController extends Controller {

    public function actionIndex(){
        return $this->render("index");
    }

    public function actionDetail(){
        return $this->render("detail");
    }
}