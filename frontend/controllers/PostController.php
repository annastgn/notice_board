<?php


namespace frontend\controllers;

use frontend\models\api\PostAPI;
use frontend\controllers\BaseApiController;
use frontend\models\MasterServicesChoiceForm;
use frontend\models\PostsShow;
use yii\data\ArrayDataProvider;
use yii\web\Controller;

class PostController extends Controller
{
    //public $modelClass=PostAPI::class;

    public function actionIndex(){
        $form = new PostsShow();
        $model=$form->show();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $model
        ]);

        return $this->render('index',[
            'dataProvider' => $dataProvider,
        ]);
    }
}