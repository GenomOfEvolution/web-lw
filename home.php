<?php
$posts = [
[
    'background_path' => '/images/still-standing-tall-img.jpg',
    'title' => 'Still Standing Tall',
    'subtitle' => 'Life begins at the end of your comfort zone.',
    'author_photo_path' => '/images/william-wong-img.jpg',
    'author_info' => 'William Wong',
    'post_date' => '9/25/2015'
],
[
    'background_path' => '/images/sunny-side-up-img.jpg',
    'title' => 'Sunny Side Up',
    'subtitle' => 'No place is ever as bad as they tell you it`s going to be.',
    'author_photo_path' => '/images/william-wong-img.jpg',
    'author_info' => 'Mat Vogels',
    'post_date' => '9/25/2015'
],
[
    'background_path' => '/images/water-falls-img.jpg',
    'title' => 'Water Falls',
    'subtitle' => 'We travel not to escape life, but for life not to escape us.',
    'author_photo_path' => '/images/mat-vogels-img.jpg',
    'author_info' => 'Mat Vogels',
    'post_date' => '9/25/2015'
],
[
    'background_path' => '/images/throught-the-mist-img.jpg',
    'title' => 'Through the Mist',
    'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
    'author_photo_path' => '/images/william-wong-img.jpg',
    'author_info' => 'William Wong',
    'post_date' => '9/25/2015'
],
[
    'background_path' => '/images/awaken-early-img.jpg',
    'title' => 'Awaken Early',
    'subtitle' => 'Not all those who wander are lost.',
    'author_photo_path' => '/images/mat-vogels-img.jpg',
    'author_info' => 'Mat Vogels',
    'post_date' => '9/25/2015'
],
[
    'background_path' => '/images/try-it-always-img.jpg',
    'title' => 'Try it Always',
    'subtitle' => 'The world is a book, and those who do not travel read only one page.',
    'author_photo_path' => '/images/mat-vogels-img.jpg',
    'author_info' => 'Mat Vogels',
    'post_date' => '9/25/2015'
],
];

$featured_posts = [
    [
        'background_path' => '/images/the-road-ahead-img.jpg',
        'tag_type' => 'none',
        'tag_text' => 'none',
        'title' => 'The Road Ahead',
        'subtitle' => 'The road ahead might be paved - it might not be.',
        'author_photo_path' => '/images/mat-vogels-img.jpg',
        'author_info' => 'Mat Vogels',
        'post_date' => '9/25/2015'
    ],
    [
        'background_path' => '/images/from-top-down-img.jpg',
        'tag_type' => 'adventure',
        'tag_text' => 'Adventure',
        'title' => 'From Top Down',
        'subtitle' => 'Once a year, go someplace you`ve never been before.',
        'author_photo_path' => '/images/william-wong-img.jpg',
        'author_info' => 'William Wong',
        'post_date' => '9/25/2015'
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Главная страница блога</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
        <link  rel="stylesheet" href="styles/main-page-style.css">
    </head>
    <body>
        <header class="header">
            <div class="header__navigation">
                <div class="navigation">
                    <img src="/images/logo-top.svg" alt="logo-top">
                    <nav class="navigation__list">
                        <a href="#" class="navigation__list-item"><span class="list-item_header">home</span></a>
                        <a href="#" class="navigation__list-item"><span class="list-item_header">categories</span></a>
                        <a href="#" class="navigation__list-item"><span class="list-item_header">about</span></a>
                        <a href="#" class="navigation__list-item"><span class="list-item_header">contact</span></a>
                    </nav>
                </div> 
            </div>
            <div class="header__content-area">
                <div class="header__main-phrase">
                    <span class="header__main-phrase_top">Let's do it together.</span>
                    <span class="header__main-phrase_bot">We travel the world in search of stories. Come along for the ride.</span>
                    <div class="header__latest-posts-button">
                        <span class="header__latest-posts-button_text">View Latest Posts</span>
                    </div>
                </div>
            </div>
        </header>
        <div class="categories-menu">
            <nav class="categories-menu__navigation">
                <a href="#" class="categories-menu__navigation_item">Nature</a>
                <a href="#" class="categories-menu__navigation_item">Photography</a>
                <a href="#" class="categories-menu__navigation_item">Relaxation</a>
                <a href="#" class="categories-menu__navigation_item">Vacation</a>
                <a href="#" class="categories-menu__navigation_item">Travel</a>
                <a href="#" class="categories-menu__navigation_item">Adventure</a>
            </nav>
        </div>
        <div class="main-content">
            <div class="featured-posts">
                <div class="main-category__header">
                    <span class="main-category__header_text">Featured Posts</span>
                    <div class="posts_header_underline"></div>
                </div>
                <?php 
                    foreach ($featured_posts as $featured_post) {
                        include 'featured_post_preview.php';
                    }
                ?>
            </div>
            <div class="most-recent-posts">
                <div class="main-category__header">
                    <span class="main-category__header_text">Most Recent</span>
                    <div class="posts_header_underline"></div>
                </div>
                <?php 
                    foreach ($posts as $post) {
                        include 'post_preview.php';
                    }
                ?>
            </div>
        </div>
        <footer class="footer">
            <div class="footer__navigation">
                <div class="navigation">
                    <img src="/images/logo-bot.svg" alt="logo-bot">
                    <nav class="navigation__list">
                        <a href="#" class="navigation__list-item"><span class="list-item_footer">home</span></a>
                        <a href="#" class="navigation__list-item"><span class="list-item_footer">categories</span></a>
                        <a href="#" class="navigation__list-item"><span class="list-item_footer">about</span></a>
                        <a href="#" class="navigation__list-item"><span class="list-item_footer">contact</span></a>
                    </nav>
                </div> 
            </div>
        </footer>
    </body>
</html>