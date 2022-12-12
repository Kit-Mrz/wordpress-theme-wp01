<?php

use Theme\Boot\Http\Page\Index;

$index = new Index();
?>

<?php get_header() ?>
<main>
    <!--? slider Area S t a r t-->
    <section class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height hero-overly slider-bg1 d-flex  align-items-center">
                <div class="container">
                    <?php foreach ($index->getSingleArea() as $item): ?>
                        <div class="row">
                            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-10 col-sm-12">
                                <div class="hero-caption">
                                    <span data-animation="fadeInUp" data-delay=".2s"><?= $item->getPostTitle(); ?></span>
                                    <h1 data-animation="fadeInUp" data-delay=".2s"><?= $item->getPostExcerpt(); ?></h1>
                                    <P data-animation="fadeInUp" data-delay=".4s"><?= $item->getPostContent(); ?></P>
                                    <a href="<?= $item->getPermalink(); ?>" class="btn_1 hero-btn"
                                       data-animation="fadeInUp"
                                       data-delay=".8s">Get Started Now</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- slider Area E n d-->
    <!--? About Area  01-->
    <?php
    /** @see About */
    get_template_part('inc/part/About');
    ?>
    <!-- About Area E n d -->
    <!--? Blog Ara S t a r t -->
    <?php
    /** @see ProgramsOffer */
    get_template_part('inc/part/ProgramsOffer', null, ["postIds" =>  [1872, 1877] ]);
    ?>
    <!-- Services Ara E n d -->
    <!--? Visit Our t h r e e -->
    <?php
    /** @see EssentialResources */
    get_template_part('inc/part/EssentialResources', null, ["postIds" => [1870, 1872, 1877]]);
    ?>
    <!-- Visit Our Tailor E n d -->
    <!--? Class-offer-area S t a r t -->
    <?php
    /** @see TopStories */
    get_template_part('inc/part/TopStories', null, ['postIds' => [1870, 1872, 1877]]);
    ?>
    <!-- Class-offer-area E n d -->
    <!--? Brand Area S t a r t -->
    <?php
    /** @see OurPartners */
    get_template_part('inc/part/OurPartners');
    ?>
    <!-- Brand Area E n d -->
    <!--? Visit o n e -->
    <?php
    /** @see TrustedStudents */
    get_template_part('inc/part/TrustedStudents', null, ["postIds" =>  [1872] ]);
    ?>
    <!-- Visit Our Tailor E n d -->
</main>
<?php $index = null;?>
<?php get_footer() ?>
