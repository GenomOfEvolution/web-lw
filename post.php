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

function getPostContent(mysqli $conn, $idToFind, &$post): void
{
    $sql = "SELECT *, UNIX_TIMESTAMP(publish_date) AS publish_date FROM post WHERE post_id =  $idToFind";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            $post = $row;
        }
    } else {
        $post = null;
        echo "Post with id {$idToFind} has not been found!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Страница блога</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="styles/the-road-ahead-style.css" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <header class="header">
            <div class="navigation-menu">
                <div class="navigation-main-left"><img src="/images/Logo-Top-post.svg"></div>
                <nav class="navigation-main-list">
                    <a href="home.php" class="navigation-list-element">Home</a>
                    <a href="#" class="navigation-list-element">Categories</a>
                    <a href="#" class="navigation-list-element">About</a>
                    <a href="#" class="navigation-list-element">Contact</a>
                </nav>
            </div>
        </header>
        <?php
        $post = [];
        $postId = $_GET['id'];
        $conn = createDBConnection();
        getPostContent($conn, $postId, $post);
        closeDBConnection($conn);
        if ($post != null) {
            include 'post_preview.php';
        }
        ?>
        <footer class="footer">
            <div class="footer-menu-area">
                <div class="navigation-menu">
                    <div class="footer-navigation-main-left"><img src="/images/Logo-Bot-post.svg"></div>
                    <nav class="navigation-main-list">
                        <a href="home.php" class="footer-navigation-list-element">Home</a>
                        <a href="#" class="footer-navigation-list-element">Categories</a>
                        <a href="#" class="footer-navigation-list-element">About</a>
                        <a href="#" class="footer-navigation-list-element">Contact</a>
                    </nav>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>