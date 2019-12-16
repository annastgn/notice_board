<?php
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div class="ShowPosts">
    <?=  \yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'columns'=> [
            'title',
            'content'
        ]
    ])
    ?>
    <h1></h1>
</div>