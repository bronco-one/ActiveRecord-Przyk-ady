<?php

namespace app\models;
use Yii;

class Lecturers extends \yii\db\ActiveRecord {
    
    public static function tableName() {
        return '{{lecturers}}';
    }
}

