<?php

namespace app\models;
use yii\base\Model;
class PerimetroForm extends Model
{
   public $catA;
   public $catB;
   public function attributeLabels(){
   	return[
   		'catA'=>'Cateto Opuesto:',
   		'catB'=>'Cateto Adyacente:'
   	];
   }
   public function rules(){
       return[
       	[['catA','catB'],'required'],
       	[['catA','catB'],'integer','min'=>0,'max'=>50]
       ];
   }
}
