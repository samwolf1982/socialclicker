<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Social */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Socials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'pagekey',
            'url:ntext',
            'title:ntext',
            'icolink:ntext',
            'fb:ntext',
            'tw:ntext',
            'yt:ntext',
            'redit:ntext',
            'slack:ntext',
            'telegram:ntext',
            'medium:ntext',
            'linkedin:ntext',
            'forum:ntext',
            'bitcointalk:ntext',
            'github:ntext',
            'instagram:ntext',
            'gplus:ntext',
            'livejournal:ntext',
            'myspace:ntext',
            'vk:ntext',
            'odnokalsniki:ntext',
            'vine:ntext',
            'pinterest:ntext',
            'tumblr:ntext',
            'fliskr:ntext',
            'meetup:ntext',
            'tagged:ntext',
            'askfm:ntext',
            'meetme:ntext',
            'classmates:ntext',
            'googleplay:ntext',
            'appstore:ntext',
        ],
    ]) ?>

</div>
