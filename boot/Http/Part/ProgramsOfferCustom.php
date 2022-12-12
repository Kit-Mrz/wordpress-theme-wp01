<?php
namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Repository\PostRepository;
use Theme\Boot\Http\Service\PageService;

class ProgramsOfferCustom
{
    private $podsIds;

    private $pageService;

    public function __construct(array $params)
    {
        $this->podsIds = (array) ($params["postIds"] ?? []);

        $this->pageService = new PageService();
    }

    /**
     * @desc
     * @return \Theme\Boot\Http\Dto\PostDto[]
     */
    public function getProgramsOfferPost()
    {
        return $this->pageService->getProgramsOfferPost($this->podsIds);
    }
}

$programsOfferCustom = new ProgramsOfferCustom($args ?? []);

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
            <?php foreach ($programsOfferCustom->getProgramsOfferPost() as $item): ?>
                <div class="col-lg-6 col-md-6">
                    <div class="single-blogs mb-30">
                        <div class="blog-img">
                            <img src="<?= $item['programContent'] ?>" alt="">
                        </div>
                        <div class="blog-caption">
                            <h3><a href="<?= $item['permalink']; ?>"><?= $item['postTitle']; ?></a></h3>
                            <p><?= $item['postExcerpt']; ?></p>
                            <a href="<?= $item['permalink']; ?>" class="browse-btn">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php $programsOffer = null; ?>
