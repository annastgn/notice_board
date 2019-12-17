<?php
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="ShowPosts">
<ul>
    <li><?php
        echo  ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_item',
        ]);
        ?></li>
</ul>
</div>