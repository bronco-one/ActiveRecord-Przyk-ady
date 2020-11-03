<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Subjects;
use app\models\Students;

class GradesController extends Controller{
    
    public function actionIndex() {
        
        return $this->render('index');
    }
    
    
}

