<?php


namespace frontend\models;

use common\models\MasterServices;
use Yii;
use yii\base\Model;
use common\models\Post;

use yii\data\ActiveDataProvider;



class PostsShow extends Post
{

    function show(){
          $query = Post::find()->asArray()->all();
//        var_dump($query);
//        die;
//        $dataProvider = new ActiveDataProvider([
//            'query' => $query,
//        ]);
        return $query;
    }


}