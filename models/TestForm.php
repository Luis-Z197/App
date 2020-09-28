<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Modelo de formulario de prueba.
 */
class TestForm extends Model{
    public $name;
    public $email;
    public $password;
    public function rules()
    {
        return [
            //campos obligatoriod
            [['name', 'password'], 'required'],
            ['email', 'email']
        ];
    }
}