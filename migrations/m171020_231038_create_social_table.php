<?php

use yii\db\Migration;

/**
 * Handles the creation of table `social`.
 */
class m171020_231038_create_social_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {

        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


        $this->createTable('social', [
            'id' => $this->primaryKey(),
            'pagekey'=>$this->integer(),
            'url'=>$this->text()->null(),
            'title'=>$this->text()->null(),
            'icolink'=>$this->text()->null(),
            'fb'=>$this->text()->null(),
            'tw'=>$this->text()->null(),
            'yt'=>$this->text()->null(),
            'redit'=>$this->text()->null(),
            'slack'=>$this->text()->null(),
            'telegram'=>$this->text()->null(),
            'medium'=>$this->text()->null(),
            'linkedin'=>$this->text()->null(),
            'forum'=>$this->text()->null(),
            'bitcointalk'=>$this->text()->null(),
            'github'=>$this->text()->null(),
            'instagram'=>$this->text()->null(),
            'gplus'=>$this->text()->null(),
            'livejournal'=>$this->text()->null(),
            'myspace'=>$this->text()->null(),
            'vk'=>$this->text()->null(),
            'odnokalsniki'=>$this->text()->null(),
            'vine'=>$this->text()->null(),
            'pinterest'=>$this->text()->null(),
            'tumblr'=>$this->text()->null(),
            'fliskr'=>$this->text()->null(),
            'meetup'=>$this->text()->null(),
            'tagged'=>$this->text()->null(),
            'askfm'=>$this->text()->null(),
            'meetme'=>$this->text()->null(),
            'classmates'=>$this->text()->null(),
            'googleplay'=>$this->text()->null(),
            'appstore'=>$this->text()->null(),
            'mail'=>$this->text()->null(),
            'kakao'=>$this->text()->null(),
//            'googleplay'=>$this->text()->null(),
//            'googleplay'=>$this->text()->null(),
//            'googleplay'=>$this->text()->null(),

        ],$tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('social');
    }
}
