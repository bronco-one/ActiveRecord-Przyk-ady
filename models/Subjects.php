<?php

namespace app\models;

use Yii;

class Subjects extends \yii\db\ActiveRecord {
    
    public static function tableName() {
        
        return '{{subjects}}';
    }
    public function getLecturer() {
        
        return $this->hasOne(Lecturers::className(), ['id_lec'=>'id_lec']);
    }
}

