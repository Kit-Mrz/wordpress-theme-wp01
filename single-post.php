<?php

use Theme\Boot\Http\Page\SinglePost;

$singlePost = new SinglePost($args ?? [
    'queriedObject' => get_queried_object(),
]);

$queriedObject = $singlePost->getQueriedObject();

$singlePost->getPostView()->setPostView();

$comments = $singlePost->getComments();

?>
<?php get_header(); ?>
<main>
    <!-- Hero area Start-->
    <?php
    /** @see HeroArea */
    get_template_part('inc/part/HeroArea', null, ['id' => 1858]);
    ?>
    <!--  Hero area End -->
    <!-- Blog Area Start -->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="<?= $queriedObject['postThumbnail']; ?>" alt="">
                        </div>
                        <div class="blog_details">
                            <h2 style="color: #2d2d2d;"><?= $queriedObject['postTitle']; ?></h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="<?= $queriedObject['authors']['authorPostsUrl']; ?>"><i
                                                class="fa fa-user"></i> <?= $queriedObject['authors']['displayName']; ?>
                                    </a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> <?= $queriedObject['commentCount']; ?>
                                        Comments</a></li>
                                <li><a href="#"><i class="fa fa-eye"></i> <?= $singlePost->getPostView()->getPostView()?> Click</a></li>
                            </ul>
                            <p class="excert">
                                <?= $queriedObject['postExcerpt']; ?>
                            </p>

                            <?= $queriedObject['postContent']; ?>

                            <div class="quote-wrapper">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and its detractors. Some people do not
                                    understand why you should have to spend money on boot camp when you can get the MCSE
                                    study materials yourself at a fraction of the camp price. However, who has the
                                    willpower to
                                    actually sit through a self-imposed MCSE training.
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and
                                4 people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                            </div>
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                            </ul>
                        </div>
                        <div class="navigation-area">
                            <div class="row">
                                <?php if (isset($queriedObject['prev']) && !empty($queriedObject['prev'])) : ?>
                                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                                        <div class="thumb">
                                            <a href="<?= $queriedObject['prev']['postThumbnailSmall']; ?>">
                                                <img class="img-fluid"
                                                     src="<?= $queriedObject['prev']['postThumbnailSmall']; ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="arrow">
                                            <a href="<?= $queriedObject['prev']['permalink']; ?>?>">
                                                <span class="lnr text-white ti-arrow-left"></span>
                                            </a>
                                        </div>
                                        <div class="detials">
                                            <p>Prev Post</p>
                                            <h4 style="color: #2d2d2d;">
                                                <a href="<?= $queriedObject['prev']['permalink']; ?>"><?= $queriedObject['prev']['postTitle']; ?></a>
                                            </h4>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if (isset($queriedObject['next']) && !empty($queriedObject['next'])) : ?>
                                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                                        <div class="detials">
                                            <p>Next Post</p>
                                            <h4 style="color: #2d2d2d;">
                                                <a href="<?= $queriedObject['next']['permalink']; ?>"><?= $queriedObject['next']['postTitle']; ?></a>
                                            </h4>
                                        </div>
                                        <div class="arrow">
                                            <a href="<?= $queriedObject['next']['permalink']; ?>">
                                                <span class="lnr text-white ti-arrow-right"></span>
                                            </a>
                                        </div>
                                        <div class="thumb">
                                            <a href="<?= $queriedObject['next']['permalink']; ?>">
                                                <img class="img-fluid"
                                                     src="<?= $queriedObject['next']['postThumbnailSmall']; ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <?php if ( !empty($postAuthor = $singlePost->getPostAuthor())) : ?>
                        <div class="blog-author">
                            <div class="media align-items-center">
                                <img src="<?= $postAuthor['avatarUrl']; ?>" alt="">
                                <div class="media-body">
                                    <a href="<?= $postAuthor['authorPostsUrl']; ?>">
                                        <h4><?= $postAuthor['displayName']; ?></h4>
                                    </a>
                                    <p><?= $postAuthor['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if(comments_open()):?>
                    <div class="comments-area">
                        <h4><?= $singlePost->getQueriedObject()['commentCount']; ?> Comments</h4>
                        <?php foreach ($singlePost->getComments() as $item): ?>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <?php if(!empty($item['avatarUrl'])):?>
                                        <img src="<?= $item['avatarUrl'];?>" alt="">
                                        <?php endif;?>
                                    </div>
                                    <div class="desc">
                                        <p class="comment">
                                            <?= $item['commentContent'];?>
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <div class="d-flex align-items-center">
                                                <h5>
                                                    <a href="<?= $item['commentAuthorUrl'];?>"><?= $item['commentAuthor'];?></a>
                                                </h5>
                                                <p class="date"><?= $item['commentDateGmt'];?> at 3:12 pm</p>
                                            </div>
                                            <div class="reply-btn">
                                                <a href="#LeaveReplay" class="btn-reply text-uppercase">reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                    <div id="LeaveReplay" class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form class="form-contact comment_form" action="<?= home_url();?>/wp-comments-post.php" method="post" id="commentForm">
                            <?= get_comment_id_fields();?>
                            <?php wp_comment_form_unfiltered_html_nonce(); ?>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="author" id="name" type="text" value="kitgor" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" type="email" value="123321@qq.com" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="url" id="website" type="text" value="http://www.baidu.com" placeholder="Website">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="button button-contactForm btn_1 boxed-btn">Post Comment
                                </button>
                            </div>
                        </form>
                    </div>
                    <?php endif;?>

                </div>
                <div class="col-lg-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
</main>
<?php get_footer(); ?>
