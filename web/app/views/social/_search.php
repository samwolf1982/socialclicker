<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SocialSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="social-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pagekey') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'icolink') ?>

    <?php // echo $form->field($model, 'fb') ?>

    <?php // echo $form->field($model, 'tw') ?>

    <?php // echo $form->field($model, 'yt') ?>

    <?php // echo $form->field($model, 'redit') ?>

    <?php // echo $form->field($model, 'slack') ?>

    <?php // echo $form->field($model, 'telegram') ?>

    <?php // echo $form->field($model, 'medium') ?>

    <?php // echo $form->field($model, 'linkedin') ?>

    <?php // echo $form->field($model, 'forum') ?>

    <?php // echo $form->field($model, 'bitcointalk') ?>

    <?php // echo $form->field($model, 'github') ?>

    <?php // echo $form->field($model, 'instagram') ?>

    <?php // echo $form->field($model, 'gplus') ?>

    <?php // echo $form->field($model, 'livejournal') ?>

    <?php // echo $form->field($model, 'myspace') ?>

    <?php // echo $form->field($model, 'vk') ?>

    <?php // echo $form->field($model, 'odnokalsniki') ?>

    <?php // echo $form->field($model, 'vine') ?>

    <?php // echo $form->field($model, 'pinterest') ?>

    <?php // echo $form->field($model, 'tumblr') ?>

    <?php // echo $form->field($model, 'fliskr') ?>

    <?php // echo $form->field($model, 'meetup') ?>

    <?php // echo $form->field($model, 'tagged') ?>

    <?php // echo $form->field($model, 'askfm') ?>

    <?php // echo $form->field($model, 'meetme') ?>

    <?php // echo $form->field($model, 'classmates') ?>

    <?php // echo $form->field($model, 'googleplay') ?>

    <?php // echo $form->field($model, 'appstore') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
