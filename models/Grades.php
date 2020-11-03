<?php

namespace app\models;

use Yii;

class Grades extends \yii\db\ActiveRecord {
    
    public function tableName() {
        
        return '{{grades}}';
    }
}
