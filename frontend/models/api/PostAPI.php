<?php


namespace frontend\models\api;


use common\models\User;
use common\models\Post;

class PostAPI extends Post{
    public function fields()
    {
        return parent::fields();
    }

    public function extraFields()
    {
        return [
            ''
        ];
    }
}