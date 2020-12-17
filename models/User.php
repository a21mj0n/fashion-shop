<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            ['name', 'default', 'value' => 'test'],
            ['phone', 'default', 'value' => '995554433'],
            [['name', 'email', 'password', 'address'], 'required']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
}
