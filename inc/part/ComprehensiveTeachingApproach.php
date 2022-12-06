<?php
namespace Wp01\Inc\Part;

use Wp01\Inc\Dto\PostDto;
use Wp01\Inc\Repository\PostRepository;

class ComprehensiveTeachingApproach
{
    private array $postIds;

    public function __construct(array $params)
    {
        $this->postIds = (array) ($params["postIds"] ?? []);
    }

    /**
     * @desc
     * @return PostDto[]
     */
    public function getComprehensiveTeachingApproach() : array
    {
        return PostRepository::getInstance()->queryPosts($this->postIds);
    }
}

$comprehensiveTeachingApproach = new ComprehensiveTeachingApproach($args ?? []);

?>
<section class="about-area section-bg section-padding">
    <?php foreach ($comprehensiveTeachingApproach->getComprehensiveTeachingApproach() as $item): ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
                    <!-- about-img -->
                    <div class="about-img about-img1  ">
                        <img src="<?= $item->getPostThumbnailLarge() ?? ""; ?>" alt="">
                    </div>
                </div>
                <div class="offset-xl-1 offset-lg-0 offset-sm-1 col-xxl-5 col-xl-5 col-lg-6 col-md-9 col-sm-11">
                    <div class="about-caption about-caption1">
                        <!-- Section Tittle -->
                        <div class="section-tittle m-0">
                            <h2><?= $item->getPostTitle() ?? ""; ?></h2>
                            <p class="mb-30"><?= $item->getPostContent() ?? ""; ?></p>
                            <a href="<?= $item->getPermalink() ?? ""; ?>" class="browse-btn mt-20">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
