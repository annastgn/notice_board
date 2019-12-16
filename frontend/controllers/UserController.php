<?php


namespace frontend\controllers;
use Yii;
use frontend\models\api\UserAPI;
use frontend\controllers\BaseApiController;

class UserController extends BaseApiController
{
    public $modelClass=UserAPI::class;

//    public function actions()
//    {
//        $actions = parent::actions();
//
//        // отключить действия "delete" и "create"
//        unset($actions['delete']);
//
//        // настроить подготовку провайдера данных с помощью метода "prepareDataProvider()"
//        $actions['index']['prepareDataProvider'] = [$this, 'prepareDataProvider'];
//
//        return $actions;
//    }
//
//    public function prepareDataProvider()
//    {
//        /* @var $modelClass \yii\db\BaseActiveRecord */
//        $modelClass = UserAPI::class;
//
//        $query = $modelClass::find();
//        $query = $modelClass::find()->where(['username' => $_GET['username']]);
//
//        return Yii::createObject([
//            'class' => 'yii\data\ActiveDataProvider',
//            'query' => $query,
//        ]);
//    }
}