<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Modelo de formulario de prueba.
 */
class CountryForm extends Model{
    public $code;
    public $name;
    public $population;
    public function rules()
    {
        return [
            //campos obligatoriod
            [['code','name', 'population'], 'required'],
            ['population','number']
        ];
    }
}