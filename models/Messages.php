<?php

namespace app\models;

class Messages extends \yii\db\ActiveRecord {
    
    public static function tableName() {
        parent::tableName();
        return 'messages';
    }
}
