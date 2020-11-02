<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Lecturers;

class LecturersController extends Controller{
    
    public function actionIndex() {
        
        $lecturers = Lecturers::find()->all();
        
        return $this->render('index',['lecturers'=>$lecturers]);
    }
}

