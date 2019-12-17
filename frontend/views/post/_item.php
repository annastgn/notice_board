<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
    <div class="post">
    <a><h1><?= Html::encode($model->title) ?></h1>git</a>
    <p><?= Html::encode($model->city) ?></p>

    <?= HtmlPurifier::process($model->content) ?>
    </div><?php
