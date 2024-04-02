<article class="most-recent__item">
    <img class="most-recent__item_image" src="<?= $post['image_url'] ?>" alt="img">
    <div class="most-recent__item_content-area">
        <h3 class="most-recent__main-text"><?= $post['title'] ?></h3>
        <span class="most-recent__bottom-text"><?= $post['subtitle'] ?></span>
        <div class="most-recent__item_author-info">
            <div class="most-recent__author-info">
                <img class="author-info__image" src="<?= $post['author_url'] ?>" alt="img">
                <span class="most-recent__author-info_text"><?= $post['author'] ?></span>
                <span class="most-recent__author-info_date"><?= date("m/d/Y", $post['publish_date']) ?></span>
            </div>
        </div>
    </div>
    <a class="post_page-link" href='/post.php?id=<?= $post['post_id'] ?>'><span></span></a>
</article>