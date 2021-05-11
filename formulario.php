<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'catA') ?>

    <?= $form->field($model, 'catB') ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>
