<?php

/* @var $this yii\web\View */

$this->title = 'Haron';
?>
<div class="site-index">

    <h1 align="center">Видосики</h1>
    <?php $items = [
        [
            'title' => 'Sintel',
            'href' => 'http://media.w3.org/2010/05/sintel/trailer.mp4',
            'type' => 'video/mp4',
            'poster' => 'http://media.w3.org/2010/05/sintel/poster.png'
        ],
        [
            'title' => 'Big Buck Bunny',
            'href' => 'http://upload.wikimedia.org/wikipedia/commons/7/75/Big_Buck_Bunny_Trailer_400p.ogg',
            'type' => 'video/ogg',
            'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Big.Buck.Bunny.-.Opening.Screen.png/' .
                '800px-Big.Buck.Bunny.-.Opening.Screen.png'
        ],
        [
            'title' => 'Elephants Dream',
            'href' => 'http://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/Elephants_Dream_%28high_quality%29.ogv/' .
                'Elephants_Dream_%28high_quality%29.ogv.360p.webm',
            'type' => 'video/webm',
            'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Elephants_Dream_s1_proog.jpg/' .
                '800px-Elephants_Dream_s1_proog.jpg'
        ]
    ]; ?>

    <?= dosamigos\gallery\Carousel::widget([
        'items' => $items, 'json' => true,
        'templateOptions' => ['id' => 'gallery_1'],
        'clientOptions' => ['container' => '#gallery_1'],
        'options' => ['id' => 'gallery_1'],
    ]); ?>


    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem consectetur consequatur deleniti, eius error
        id in nam odit officiis pariatur quasi quos unde? Dolore exercitationem mollitia numquam possimus quas.</p>


</div>
