<article class="most-recent__item">
    <img class="most-recent__item_image" src="<?= $post['background_path'] ?>" alt="img">
    <div class="most-recent__item_content-area">
        <h3 class="most-recent__main-text"><?= $post['title'] ?></h3>
        <span class="most-recent__bottom-text"><?= $post['subtitle'] ?></span>
        <div class="most-recent__item_author-info">
            <div class="most-recent__author-info">
                <img class="author-info__image" src="<?= $post['author_photo_path'] ?>" alt="img">
                <span class="most-recent__author-info_text"><?= $post['author_info'] ?></span>
                <span class="most-recent__author-info_date"><?= $post['post_date'] ?></span>
            </div>
        </div>
    </div>
</article>