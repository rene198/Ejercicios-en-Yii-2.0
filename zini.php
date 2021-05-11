<?php
use yii\helpers\Html; ?>
<ul>
	<p><label> Cateto Opuesto: </label>: <?= Html::encode($model->catA) ?> </p>
	<p><label> Cateto Adyacente: </label>: <?= Html::encode($model->catB) ?> </p>
	<p><label> Perimetro del Rombo: </label>: <?= Html::encode($resultado) ?> </p>
</ul>
