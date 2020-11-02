<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Subjects;
use app\models\Lecturers;

class SubjectsController extends Controller {
    
    public function actionIndex() {
        
        $subjects = Subjects::find()->all();
        $lecturers = Lecturers::find()->all();
        
        return $this->render('index',['subjects'=>$subjects,'lecturers'=>$lecturers]);
    }
}

