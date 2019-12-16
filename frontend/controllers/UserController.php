<?php


namespace frontend\controllers;

use frontend\models\api\UserAPI;
use frontend\controllers\BaseApiController;

class UserController extends BaseApiController
{
    public $modelClass=UserAPI::class;
}