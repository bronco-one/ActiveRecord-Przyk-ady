<?php

namespace app\models;

use Yii;

class Grades extends \yii\db\ActiveRecord {
    
    public static function tableName() {
        
        return '{{grades}}';
    }
    
    public function getStudent() {
        return $this->hasOne(Students::className(), ['id'=>'id_st']);
    }
}
