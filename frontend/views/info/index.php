<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'User Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-info-index">

    <h1><?= Html::encode($this->title) ?></h1>



    <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'last_name',
            'name',
            'patronymic',
            'birthday',
            //'date_create',
            //'date_update',
            //'photo',
            //'userId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
