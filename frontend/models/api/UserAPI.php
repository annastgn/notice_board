<?php


namespace frontend\models\api;


use common\models\User;
use common\models\Post;

class UserAPI extends User
{
    public function fields()
    {
        return parent::fields();
    }

    public function extraFields()
    {
        return [
            'posts'
        ];
    }
}