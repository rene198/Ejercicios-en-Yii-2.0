<?php
namespace app\controllers;
use yii\web\Controller;
use Yii;
use app\models\PerimetroForm;
class PerimetroController extends Controller{
//Public function actionPerimetro($catA=6,$catB){
Public function actionPerimetro(){
	$model= new PerimetroForm;
	if($model->load(Yii::$app->request->post()) && $model->validate()){
		//$catA= Yii::$app->request->get('catA');
	    //$catA=isset($_GET['catA'])?$_GET['catA']:null;
	    //$catB=isset($_GET['catB'])?$_GET['catB']:empty($_GET['catA']);
	    $h=sqrt(pow($model->catA,2)+pow($model->catB,2));
	    $perimetro=4*$h;
	    return $this -> render('zini',['resultado'=>$perimetro,'model'=>$model]); 
	}
	 else
	    return $this -> render('formulario',['model'=>$model]);	
	}
}