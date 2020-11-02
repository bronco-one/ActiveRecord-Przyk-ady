<?php

namespace app\models;

use Yii;

class Subjects extends \yii\db\ActiveRecord {
    
    public static function tableName() {
        
        return '{{subjects}}';
    }
}

