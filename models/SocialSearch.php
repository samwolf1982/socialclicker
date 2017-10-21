<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Social;

/**
 * SocialSearch represents the model behind the search form about `app\models\Social`.
 */
class SocialSearch extends Social
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pagekey'], 'integer'],
            [['url', 'title', 'icolink', 'fb', 'tw', 'yt', 'redit', 'slack', 'telegram', 'medium', 'linkedin', 'forum', 'bitcointalk', 'github', 'instagram', 'gplus', 'livejournal', 'myspace', 'vk', 'odnokalsniki', 'vine', 'pinterest', 'tumblr', 'fliskr', 'meetup', 'tagged', 'askfm', 'meetme', 'classmates', 'googleplay', 'appstore'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Social::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,

                ]
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'pagekey' => $this->pagekey,
        ]);

        $query->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'icolink', $this->icolink])
            ->andFilterWhere(['like', 'fb', $this->fb])
            ->andFilterWhere(['like', 'tw', $this->tw])
            ->andFilterWhere(['like', 'yt', $this->yt])
            ->andFilterWhere(['like', 'redit', $this->redit])
            ->andFilterWhere(['like', 'slack', $this->slack])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'medium', $this->medium])
            ->andFilterWhere(['like', 'linkedin', $this->linkedin])
            ->andFilterWhere(['like', 'forum', $this->forum])
            ->andFilterWhere(['like', 'bitcointalk', $this->bitcointalk])
            ->andFilterWhere(['like', 'github', $this->github])
            ->andFilterWhere(['like', 'instagram', $this->instagram])
            ->andFilterWhere(['like', 'gplus', $this->gplus])
            ->andFilterWhere(['like', 'livejournal', $this->livejournal])
            ->andFilterWhere(['like', 'myspace', $this->myspace])
            ->andFilterWhere(['like', 'vk', $this->vk])
            ->andFilterWhere(['like', 'odnokalsniki', $this->odnokalsniki])
            ->andFilterWhere(['like', 'vine', $this->vine])
            ->andFilterWhere(['like', 'pinterest', $this->pinterest])
            ->andFilterWhere(['like', 'tumblr', $this->tumblr])
            ->andFilterWhere(['like', 'fliskr', $this->fliskr])
            ->andFilterWhere(['like', 'meetup', $this->meetup])
            ->andFilterWhere(['like', 'tagged', $this->tagged])
            ->andFilterWhere(['like', 'askfm', $this->askfm])
            ->andFilterWhere(['like', 'meetme', $this->meetme])
            ->andFilterWhere(['like', 'classmates', $this->classmates])
            ->andFilterWhere(['like', 'googleplay', $this->googleplay])
            ->andFilterWhere(['like', 'appstore', $this->appstore]);

        return $dataProvider;
    }
}
