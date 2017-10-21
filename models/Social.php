<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "social".
 *
 * @property integer $id
 * @property integer $pagekey
 * @property string $url
 * @property string $title
 * @property string $icolink
 * @property string $fb
 * @property string $tw
 * @property string $yt
 * @property string $redit
 * @property string $slack
 * @property string $telegram
 * @property string $medium
 * @property string $linkedin
 * @property string $forum
 * @property string $bitcointalk
 * @property string $github
 * @property string $instagram
 * @property string $gplus
 * @property string $livejournal
 * @property string $myspace
 * @property string $vk
 * @property string $odnokalsniki
 * @property string $vine
 * @property string $pinterest
 * @property string $tumblr
 * @property string $fliskr
 * @property string $meetup
 * @property string $tagged
 * @property string $askfm
 * @property string $meetme
 * @property string $classmates
 * @property string $googleplay
 * @property string $appstore
 */
class Social extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'social';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pagekey'], 'integer'],
            [['url','mail', 'kakao', 'title', 'icolink', 'fb', 'tw', 'yt', 'redit', 'slack', 'telegram', 'medium', 'linkedin', 'forum', 'bitcointalk', 'github', 'instagram', 'gplus', 'livejournal', 'myspace', 'vk', 'odnokalsniki', 'vine', 'pinterest', 'tumblr', 'fliskr', 'meetup', 'tagged', 'askfm', 'meetme', 'classmates', 'googleplay', 'appstore'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pagekey' => 'Pagekey',
            'url' => 'Url',
            'title' => 'Title',
            'icolink' => 'Icolink',
            'mail' => 'email',

            'fb' => 'Fb',
            'tw' => 'Tw',
            'yt' => 'Yt',
            'redit' => 'Redit',

            'slack' => 'Slack',
            'kakao' => 'kakao',


            'telegram' => 'Telegram',

            'medium' => 'Medium',

            'linkedin' => 'Linkedin',

            'forum' => 'Forum',

            'bitcointalk' => 'Bitcointalk',


            'github' => 'Github',

            'instagram' => 'Instagram',


            'gplus' => 'Gplus',

            'livejournal' => 'Livejournal',
            'myspace' => 'Myspace',
            'vk' => 'Vk',
            'odnokalsniki' => 'Odnokalsniki',

            'vine' => 'Vine',

            'pinterest' => 'Pinterest',
            'tumblr' => 'Tumblr',
            'fliskr' => 'Fliskr',
            'meetup' => 'Meetup',
            'tagged' => 'Tagged',
            'askfm' => 'Askfm',
            'meetme' => 'Meetme',
            'classmates' => 'Classmates',

            'googleplay' => 'Googleplay',
            'appstore' => 'Appstore',

        ];
    }
}
