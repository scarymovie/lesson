<?php
/* @var $this yii\web\View */
$this->title='Профиль';
use frontend\controllers\ProfileController;
use yii\helpers\Url;
?>
<?php foreach ($user as $key):?>
    <hr>
    <a href="<?php echo Url::to(['profile/update','id'=>$key->id])?>">редактировать</a>
    <p>Фамилия</p><?php echo $key->last_name;?>
    <p>Имя</p><?php echo $key->name;?>
    <p>Отчество</p><?php echo $key->patronymic;?>
    <p>Дата регистрации на сайте</p><?php echo $key->date_create;?>
    <p>Фото</p><?php echo $key->photo;?>
    <?php $item = $key->birthday;?>
    <?php $date = new DateTime($item);?>
    <?php $now = new DateTime();?>
    <?php $interval = $now->diff($date);?>
    <p>Возраст</p><?php echo $interval->y;?>
<?php endforeach;?>

