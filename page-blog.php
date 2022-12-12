<?php

use Theme\Boot\Http\Page\PageBlog;

$object = get_queried_object();

$pageBlog = new PageBlog($args ?? []);

$id = $object->ID;


?>
<?php get_header(); ?>
<main>
    <!-- Hero area Start-->
    <?php
    /** @see HeroArea */
    get_template_part('boot/Http/Part/HeroArea', null, ['id' => $id]);
    ?>
    <!--  Hero area End -->
    <!-- Blog Area Start-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <!-- Blot Item Start -->
                        <?php foreach ($pageBlog->listBlogs() as $item): ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" width="800" height="400"
                                         src="<?= $item['postThumbnail']; ?>" alt="No img">
                                    <a href="<?= $item['permalink']; ?>" class="blog_item_date">
                                        <h3><?= $item['day']; ?></h3>
                                        <p><?= $item['month']; ?></p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?= $item['permalink']; ?>">
                                        <h2 class="blog-head" style="color: #2d2d2d;"><?= $item['postTitle']; ?></h2>
                                    </a>
                                    <p><?= $item['postExcerpt']; ?></p>
                                    <ul class="blog-info-link">
                                        <li>
                                            <a href="<?= $item['authorPostsUrl']; ?>">
                                                <i class="fa fa-user"></i> <?= $item['postAuthor']; ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-comments"></i> <?= $item['commentCount']; ?>
                                                Comments</a>
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        <?php endforeach; ?>
                        <!-- Blot Item end -->
                        <nav class="blog-pagination justify-content-center d-flex">

                            <ul class="pagination">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>
<?php get_footer(); ?>
