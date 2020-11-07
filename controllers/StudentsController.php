<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Students;


class StudentsController extends Controller{
    
    public function actionIndex() {
        
        
        $students = Students::find()->orderBy('last_name ASC')->all();
        return $this->render('index',['students'=>$students,]);
    }
}


