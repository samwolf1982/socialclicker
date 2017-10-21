<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Social */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="social-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pagekey')->textInput() ?>

    <?= $form->field($model, 'url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'title')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icolink')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fb')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tw')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'yt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'redit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'slack')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'telegram')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'medium')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'linkedin')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'forum')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'bitcointalk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'github')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'instagram')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'gplus')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'livejournal')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'myspace')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vk')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'odnokalsniki')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vine')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pinterest')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tumblr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'fliskr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meetup')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tagged')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'askfm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'meetme')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'classmates')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'googleplay')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'appstore')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
