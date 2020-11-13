<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Students;
use app\models\Grades;
use app\models\Subjects;



class StudentsController extends Controller{
    
    public $result =0;
    public $averageGrades =[];

    public function actionIndex() {
        
        $students = Students::find()->orderBy('last_name ASC')->all();
        return $this->render('index',['students'=>$students,]);
    }
    
    public function actionOne($id) {
        
        $subjects = Subjects::find()->orderBy('name')->all();
        $student = Students::findOne($id);
        $marks = $student->grades;
        $n = Grades::find()->where(['id_st' =>$id])->count();
        $sum = Grades::find()->select(['grade'])->where(['id_st'=>$id])->all();
       
        
        foreach ($sum as $s){
            
            $this->result += $s->grade;
        }
        $result = round(($this->result)/$n,2);
        
        
        return $this->render('one',[ 'marks'=>$marks,'student'=>$student,'subjects'=>$subjects, 
            'result'=>$result ]);
    }
    
    public function actionAverage() {
        
        
        $student = Students::find()->all();
        
        foreach($student as $st){
            $all =0;
            $sum = Grades::find()->select(['grade'])->where(['id_st'=>$st->id])->all();
            $n = Grades::find()->where(['id_st' =>$st->id])->count();
            foreach ($sum as $s){
            $all += $s->grade;
            $result[$st->id] = round(($all)/$n,2);
            
           
        }
        
        }
        arsort($result); 
       
        return $this->render('average',['result'=>$result,'student'=>$student]);
    }
}


