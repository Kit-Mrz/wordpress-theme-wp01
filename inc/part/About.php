<?php
namespace Wp01\Inc\Part;

use Wp01\Inc\Repository\PostRepository;

class About
{
    /**
     * @desc A COMPREHENSIVE TEACHING APPROACH
     * @return \Wp01\Inc\Dto\PostDto[]
     */
    public function getSelectionSecond()
    {
        return PostRepository::getInstance()->queryPosts([1177]);
    }
}

$about = new About();

?>
<section class="about-area section-bg section-padding">
    <div class="container">
        <?php foreach ($about->getSelectionSecond() as $item) : ?>
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img about-img1  ">
                        <img src="<?= $item->getPostThumbnailLarge() ?>" alt="">
                    </div>
                </div>
                <div class="offset-xl-1 offset-lg-0 offset-sm-1 col-xxl-5 col-xl-5 col-lg-6 col-md-9 col-sm-11">
                    <div class="about-caption about-caption1">
                        <!-- Section Tittle -->
                        <div class="section-tittle m-0">
                            <h2><?= $item->getPostTitle(); ?></h2>
                            <p class="mb-30">
                                <?= $item->getPostExcerpt(); ?>
                            </p>
                            <a href="<?= $item->getPermalink(); ?>" class="browse-btn mt-20">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
