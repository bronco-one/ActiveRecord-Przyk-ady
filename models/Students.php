<?php

namespace app\models;
use Yii;

class Students extends \yii\db\ActiveRecord{
    
    public static function tableName() {
        return '{{students}}';
    }
}

