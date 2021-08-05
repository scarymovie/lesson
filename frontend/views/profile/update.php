<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<h1>Редактировать</h1>


<?php $form = ActiveForm::begin();?>
    <?php echo $form->field($model, 'last_name');?>
    <?php echo $form->field($model, 'name');?>
    <?php echo $form->field($model, 'patronymic');?>
    <?php echo $form->field($model, 'birthday');?>
    <?php echo $form->field($model, 'photo');?>
    <?php echo $form->field($model, 'date_create');?>

    <?php echo Html::submitButton('Save',[
            'class'=>'btn btn-primary'
    ]); ?>
<?php ActiveForm::end() ?>
