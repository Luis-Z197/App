<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;
use app\models\CountryForm;
use Exception;
//Luis Zurita
class CrudController extends Controller
{
    public function actionIndex()
    {
        $query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
    public function actionInsert(){
        $data=new Country();
        $model = new CountryForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $data->code=$model->code;
            $data->name=$model->name;
            $data->population=$model->population;
            try {
                $result=$data->save();
                if($result==1){
                    $messaje='País guardo con exito';
                    return $this->render('insert', [
                    'model' => $model,
                    'messaje'=>$messaje
                ]);
                }
                else{
                    throw new Exception('Error al guardar');
                }
            }
            catch(Exception $e){
                $messaje='Error al guardar';
                return $this->render('insert', [
                    'model' => $model,
                    'messaje'=>$messaje
                ]);
            }
        }
        else{
            return $this->render('insert', [
                'model' => $model,
                'messaje'=>''
            ]);
        }
    }
}