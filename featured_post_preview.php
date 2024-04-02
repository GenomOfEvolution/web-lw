<article class="featured-posts__item_image" style="background-image: url(<?= $featured_post['image_url'] ?>);">
    <div class="featured-posts__tag__<?= $featured_post['tag_type'] ?>">
        <span class="featured-posts__tag_text"><?= $featured_post['tag_text'] ?></span>
    </div>
    <h2 class="article-info__main-text"><?= $featured_post['title'] ?></h2>
    <span class="article-info__bottom-text"><?= $featured_post['subtitle'] ?></span>
    <div class="article-info">
        <div class="author-info">
            <img class="author-info__image" src="<?= $featured_post['author_url'] ?>" alt="img">
            <span class="author-info__text"><?= $featured_post['author'] ?></span>
        </div>
        <span class="article-info__date"><?= date("m/d/Y", $featured_post['publish_date']) ?></span>
    </div>
    <a class="post_page-link" href='/post.php?id=<?= $featured_post['post_id'] ?>'><span></span></a>
</article>