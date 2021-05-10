<?php
namespace app\controllers;
use yii\web\Controller;

class SextoController extends Controller
{
    public function actionIndex()
    {
        $mens="Se esta haciendo una sesión en vivo por twitch";
        return $this->render('index',array('sofi' =>$mens));
    }
    public function datosItems(){
    	$nuevaLis=[
  			['id'=>1, 'titulo'=>'Fundación de Palpala ', 'fecha'=>'1948-04-17'],
  			['id'=>2, 'titulo'=>'Declarada ciudad de Palpala ','fecha'=>'1972-05-25'],
  			['id'=>3, 'titulo'=>'1° Colada de arrabio ','fecha'=>'1945-10-11']
  		];
  		return $nuevaLis; 
    }

    public function datosAtma(){
    	$nuevalista=[
		['titulo'=>'LEONARDO', 'fecha'=>'24/05/93'],
		['titulo'=>'TEDESCO', 'fecha'=>'23/01/90'],
		['titulo'=>'JAIN', 'fecha'=>'11/05/95'],
		['titulo'=>'IVO', 'fecha'=>'01/07/92']
		];
		return $nuevalista;
    }
    //Llamada desde la URL: localhost/basic/web/index.php?r=sexto/galerna&paresp=IVO        
    public function actionGalerna($id){
	   	$mensaje='Generando una CONSULTA en la lista';
    	$linea= $this->datosItems();
    	$item=null;
    	foreach ($linea as $l) {
    		if ($id == $l['id'])
    			$item=$l;
    	}
    	return $this->render('orbis',['serie'=>$mensaje, 'nuevaL'=>$item]);
    }
    //Llamada desde la URL: localhost/basic/web/index.php?r=sexto/palpala
    public function actionPalpala(){
        $curso="Sexto Primera TIPP 2020";
        $nuevalista= $this->datosItems();
        return $this->render('ciudad',['varmens2'=>$curso, 'nlista'=> $nuevalista]);
    }
    
    public function actionInfo(){
        return $this->render('info');
    }
    //Llamada desde la URL: localhost/basic/web/index.php?r=sexto/materias&view=id81
    public function actions(){
        return[
               'error' => ['class'=> 'yii\web\ErrorAction',
                          ],
               'captcha' => ['class'=> 'yii\captcha\CaptchaAction',
                             'fixedVerifyCode' => YII_ENV_TEST ? 'testme':null,
                          ],
               'materias' => ['class'=> 'yii\web\ViewAction',
                            'viewPrefix'=>'materias'
                          ],
              ];
    }

    public function actionSavio(){
        return $this->render('saviotest');
    }
    public function actionTest(){
      $resp= Yii::$app->request->get('resp',0);
      if ($resp){
        $this->layout='respuesta';
      }
      else{
        $this->layout='main';
      }
      return $this->render('test',['resp'=>$resp]);
    }
}
