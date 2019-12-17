<?php


namespace frontend\models;

use Yii;
use yii\base\Model;
use common\models\Post;

use yii\data\ActiveDataProvider;



class PostsShow extends Post
{

    function show(){

        $query = Post::find()
            ->select(['title', 'content', 'post.city', 'cost', 'username'])
            ->joinWith('user');
            //->where(['post.status' => Order::STATUS_ACTIVE])
//            ->all();

        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'defaultOrder' => [
                    'title' => SORT_ASC,
                ]
            ],
        ]);

        return $provider;
    }


}