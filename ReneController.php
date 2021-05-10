<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\CalcmayForm;
class ReneController extends Controller{
	public function actionIndex()
    {
        $mens="Twitch";
        return $this->render('index',['var1'=>$mens]);
    }
    public function actionCalmay(){
        $model=new CalcmayForm;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
        	//LA LOGICA DE CALCULAR CUAL DE LOS DOS NUMEROS ES MAYOR
        	//ESA INFORMACION LE ENVIO A LA VISTA
        	if($model->numa > $model->numb) 
               return $this->render('todokpaula',['model'=>$model,'may'=>$model->numa]);
           else
           	  return $this->render('todokpaula',['model'=>$model,'may'=>$model->numb]);
        }else{
        	return $this->render('formulario',['model'=>$model]);
        }
    }
}