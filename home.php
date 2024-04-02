<?php
const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
    $conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeDBConnection(mysqli $conn): void
{
    $conn->close();
}

function getFeaturedPosts(mysqli $conn, &$featured_posts): void
{
    $sql = "SELECT *, UNIX_TIMESTAMP(publish_date) AS publish_date FROM post WHERE featured = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $featured_posts[] = $row;
        }
    }
}

function getMostRecentPosts(mysqli $conn, &$posts): void
{
    $sql = "SELECT *, UNIX_TIMESTAMP(publish_date) AS publish_date FROM post WHERE featured = 0";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $posts[] = $row;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Главная страница блога</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Oxygen:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles/main-page-style.css">
</head>

<body>
    <header class="header">
        <div class="header__navigation">
            <div class="navigation">
                <img src="/images/logo-top.svg" alt="logo-top">
                <nav class="navigation__list">
                    <a href="home.php" class="navigation__list-item"><span class="list-item_header">home</span></a>
                    <a href="#" class="navigation__list-item"><span class="list-item_header">categories</span></a>
                    <a href="#" class="navigation__list-item"><span class="list-item_header">about</span></a>
                    <a href="#" class="navigation__list-item"><span class="list-item_header">contact</span></a>
                </nav>
            </div>
        </div>
        <div class="header__content-area">
            <div class="header__main-phrase">
                <span class="header__main-phrase_top">Let's do it together.</span>
                <span class="header__main-phrase_bot">We travel the world in search of stories. Come along for the
                    ride.</span>
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
            $featured_posts = [];
            $conn = createDBConnection();
            getFeaturedPosts($conn, $featured_posts);
            closeDBConnection($conn);
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
            $posts = [];
            $conn = createDBConnection();
            getMostRecentPosts($conn, $posts);
            closeDBConnection($conn);
            foreach ($posts as $post) {
                include 'most_recent_post_preview.php';
            }
            ?>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__navigation">
            <div class="navigation">
                <img src="/images/logo-bot.svg" alt="logo-bot">
                <nav class="navigation__list">
                    <a href="home.php" class="navigation__list-item"><span class="list-item_footer">home</span></a>
                    <a href="#" class="navigation__list-item"><span class="list-item_footer">categories</span></a>
                    <a href="#" class="navigation__list-item"><span class="list-item_footer">about</span></a>
                    <a href="#" class="navigation__list-item"><span class="list-item_footer">contact</span></a>
                </nav>
            </div>
        </div>
    </footer>
</body>

</html>