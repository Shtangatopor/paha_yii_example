<?php

use yii\bootstrap\Carousel;

/* @var $this yii\web\View */

$this->title = 'HARON HARON';
?>
<div class="site-index">

    <div>
        <?php

        echo Carousel::widget([
            'items' => [
                [
                    'content' => '<img src="https://images.theconversation.com/files/350865/original/file-20200803-24-50u91u.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop"/>',
                    'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                    'options' => [],
                ],
                [
                    'content' => '<img src="https://images.theconversation.com/files/350865/original/file-20200803-24-50u91u.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=1200&h=1200.0&fit=crop"/>',
                    'caption' => '<h4>This is title 2</h4><p>This is the caption text 2</p>',
                    'options' => [],
                ],
            ]
        ]);
        ?>
    </div>

</div>
