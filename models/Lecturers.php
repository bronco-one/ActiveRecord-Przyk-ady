<?php

namespace app\models;
use Yii;

class Lecturers extends \yii\db\ActiveRecord {
    
    public static function tableName() {
        return '{{lecturers}}';
    }
    
    public function getSubjects() {
        
        return $this->hasMany(Subjects::className(), ['id_lec'=>'id_lec']);
    }
}

