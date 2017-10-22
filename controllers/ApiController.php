<?php

namespace app\controllers;

use app\models\Social;
use Yii;
use yii\web\Response;

class ApiController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSocial()
    {
//        title:Yii Framework Forum
//urlkey:http://www.yiiframework.com
//sesionkey:2
//link:http://www.yiiframework.com/forum/index.php/forum/7-framework-news/
      if (!Yii::$app->request->isPost) return ['not post'];



      $soc=    Social::find()->where(['pagekey'=>Yii::$app->request->post('sesionkey'),
                                        'url'=>Yii::$app->request->post('urlkey'),
                                        ])->one();
  if (!$soc) $soc=new Social();
 $soc->pagekey=Yii::$app->request->post('sesionkey');
 $soc->url=Yii::$app->request->post('urlkey');
 $soc->title=Yii::$app->request->post('title');

 $link=Yii::$app->request->post('link');
$is='no';
 if ($this->is_fb($link)) { $soc->fb=$link; $is='fb';  }elseif ($this->is_tw($link)) { $soc->tw=$link; $is='tw';  }elseif ($this->is_yt($link))
 { $soc->yt=$link; $is='yt';  }elseif ($this->is_redit($link))
 { $soc->redit=$link; $is='redit';  }elseif ($this->is_slack($link))
 { $soc->slack=$link; $is='slack';  }elseif ($this->is_telegram($link))
 { $soc->telegram=$link; $is='telegram';  }elseif ($this->is_medium($link))
 { $soc->medium=$link; $is='medium';  }elseif ($this->is_linkedin($link))
 { $soc->linkedin=$link; $is='linkedin';  }elseif ($this->is_forum($link))
 { $soc->forum=$link; $is='forum';  }elseif ($this->is_bitcointalk($link))
 { $soc->bitcointalk=$link; $is='bitcointalk';  }elseif ($this->is_github($link))
 { $soc->github=$link; $is='github';  }elseif ($this->is_instagram($link))
 { $soc->instagram=$link; $is='instagram';  }elseif ($this->is_gplus($link))
 { $soc->gplus=$link; $is='gplus';  }elseif ($this->is_googleplay($link))
 { $soc->googleplay=$link; $is='googleplay';  }elseif ($this->is_appstore($link))
 { $soc->appstore=$link; $is='appstore';  }elseif ($this->is_mail($link))
 { $soc->mail=$link; $is='mail';  }elseif ($this->is_kakao($link))
 { $soc->kakao=$link; $is='kakao';  }









         $soc->save(false);



return ['is'=>$is ];




    }



    /**
     *link:https://open.kakao.com/o/gFuFx8z
     * @param $link
     * return +-
     */
    private  function  is_kakao($link){
        if (strpos($link, 'open.kakao.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     *link:mailto:Info@bitjob.io?body=Dear%20bitJob%20Team,
     * @param $link
     * return +-
     */
    private  function  is_mail($link){
        if (strpos($link, 'mailto:') !== false) {
            return true;
        }
        return false;

    }

    /**
     *https://itunes.apple.com/story/id1296433628
     * @param $link
     * return +-
     */
    private  function  is_appstore($link){
        if (strpos($link, 'itunes.apple.com') !== false) {
            return true;
        }
        return false;

    }


    /**
     *link:https://play.google.com/store/apps/details?id=com.electroneum.app
     * @param $link
     * return +-
     */
    private  function  is_googleplay($link){
        if (strpos($link, 'play.google.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     *link:https://drive.google.com/file/d/0B6VVmGzOdFPBNFJJenZBNHB6UWc/view?usp=sharing  link:https://plus.google.com/u/0/b/115416800073915276221/115416800073915276221/videos
     * @param $link
     * return +-
     */
    private  function  is_gplus($link){
        if (strpos($link, 'drive.google.com') !== false) {
            return true;
        }

        if (strpos($link, 'plus.google.com') !== false) {
            return true;
        }


        return false;

    }
    /**
     *https://www.instagram.com/?hl=ru https://instagram.com/atbcoincom
     * @param $link
     * return +-
     */
    private  function  is_instagram($link){
        if (strpos($link, 'instagram.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     *llink:https://github.com/bitjobteam
     * @param $link
     * return +-
     */
    private  function  is_github($link){
        if (strpos($link, 'github.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     *link:https://bitcointalk.org/index.php?topic=1943946
     * @param $link
     * return +-
     */
    private  function  is_bitcointalk($link){
        if (strpos($link, 'bitcointalk.org') !== false) {
            return true;
        }
        return false;

    }


    /**
     * ---------------
     * @param $link
     * return +-
     */
    private  function  is_forum($link){
        return false;
        if (strpos($link, 'www.linkedin.com') !== false) {
            return true;
        }
        return false;

    }




    /**
     * link:https://www.linkedin.com/company-beta/18013385/
     * @param $link
     * return +-
     */
    private  function  is_linkedin($link){

        if (strpos($link, 'linkedin.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     * link:https://medium.com/bitjob/bitjob-decides-to-prevent-new-registrations-for-slack-channel-b8562f8dddc5
     * @param $link
     * return +-
     */
    private  function  is_medium($link){


        if (strpos($link, 'medium.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     * link:https://t.me/openanxteam
     * @param $link
     * return +-
     */
    private  function  is_telegram($link){


        if (strpos($link, 't.me') !== false) {
            return true;
        }
        return false;

    }



    /**
     * link:https://www.facebook.com/bitJobmarket/     link:https://fb.me/realestateassetledger
     * @param $link
     * return +-
     */
    private  function  is_fb($link){


        if (strpos($link, 'facebook.com') !== false) {
            return true;
        }
        if (strpos($link, 'fb.me') !== false) {
            return true;
        }
        return false;

    }


    /**
     * link:https://twitter.com/BitJob_Team
     * @param $link
     * return +-
     */
    private  function  is_tw($link){


        if (strpos($link, 'twitter.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     * //link:https://www.youtube.com/channel/UCPtjrCU8pUztqQHY75a7npg
     * @param $link
     * return +-
     */
    private  function  is_yt($link){


        if (strpos($link, 'youtube.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     * //link:https://www.reddit.com/r/HedgeToken/  http://reddit.com/r/omise_go
     * @param $link
     * return +-
     */
    private  function  is_redit($link){

        if (strpos($link, 'reddit.com') !== false) {
            return true;
        }
        return false;

    }

    /**
     * //https://coindashslack.stamplayapp.com/       https://skincoin.slack.com/
     * @param $link
     * return +-
     */
    private  function  is_slack($link){

        if (strpos($link, 'app.com') !== false ) {
            return true;
        }
        if (strpos($link, 'slack.com') !== false ) {
            return true;
        }
        return false;

    }



    public function beforeAction($action)
    {

        \Yii::$app->response->format = Response::FORMAT_JSON;
        return parent::beforeAction($action);
    }

    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    // restrict access to
                    'Origin' => ['*', '*'],
                    'Access-Control-Request-Method' => ['POST', 'PUT'],
                    // Allow only POST and PUT methods
                    'Access-Control-Request-Headers' => ['X-Wsse'],
                    // Allow only headers 'X-Wsse'
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Allow-Origin'=>'*',
                    // Allow OPTIONS caching
                    'Access-Control-Max-Age' => 3600,
                    // Allow the X-Pagination-Current-Page header to be exposed to the browser.
                    'Access-Control-Expose-Headers' => ['X-Pagination-Current-Page'],
                ],

            ],
        ];
    }


}
