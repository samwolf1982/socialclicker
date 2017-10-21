<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SocialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Socials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="social-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Social', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pagekey',
            'url:ntext',
            'title:ntext',
            'icolink:ntext',
            // 'fb:ntext',
            // 'tw:ntext',
            // 'yt:ntext',
            // 'redit:ntext',
            // 'slack:ntext',
            // 'telegram:ntext',
            // 'medium:ntext',
            // 'linkedin:ntext',
            // 'forum:ntext',
            // 'bitcointalk:ntext',
            // 'github:ntext',
            // 'instagram:ntext',
            // 'gplus:ntext',
            // 'livejournal:ntext',
            // 'myspace:ntext',
            // 'vk:ntext',
            // 'odnokalsniki:ntext',
            // 'vine:ntext',
            // 'pinterest:ntext',
            // 'tumblr:ntext',
            // 'fliskr:ntext',
            // 'meetup:ntext',
            // 'tagged:ntext',
            // 'askfm:ntext',
            // 'meetme:ntext',
            // 'classmates:ntext',
            // 'googleplay:ntext',
            // 'appstore:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
