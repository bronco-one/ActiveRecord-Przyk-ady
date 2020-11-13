<?php

namespace app\models;
use Yii;
use app\models\Grades;

class Students extends \yii\db\ActiveRecord{
    
    
    public static function tableName() {
        
        return '{{students}}';
    }
    
    public function getGrades() {
        
        return $this->hasMany(Grades::className(), ['id_st'=>'id']);
    }
}

