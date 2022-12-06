<?php
namespace Wp01\Inc\Part;

use Wp01\Inc\Repository\PostRepository;

class ProgramsOffer
{
    private $podsIds;

    public function __construct(array $params)
    {
        $this->podsIds = (array) ($params["postIds"] ?? []);
    }

    /**
     * @desc
     * @return \Wp01\Inc\Dto\PostDto[]
     */
    public function getProgramsOfferPost()
    {
        return PostRepository::getInstance()->queryPosts($this->podsIds);
    }
}

// [1872, 1877]

$programsOffer = new ProgramsOffer($args ?? []);
?>

<section class="home-blog section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle text-center mb-40">
                    <h2>Programs we Offer</h2>
                    <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur
                        tellus metus, sed feugiat leo posuere ac. Morbi vitae tincidunt mi, et malesuada massa.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($programsOffer->getProgramsOfferPost() as $item): ?>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="<?= $item->getPostThumbnailLarge() ?>" alt="">
                        </div>
                        <div class="blog-caption">
                            <h3><a href="<?= $item->getPermalink(); ?>"><?= $item->getPostTitle(); ?></a></h3>
                            <p><?= $item->getPostExcerpt(); ?></p>
                            <a href="<?= $item->getPermalink(); ?>" class="browse-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php $programsOffer = null; ?>
