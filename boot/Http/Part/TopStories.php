<?php
namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Repository\PostRepository;

class TopStories
{

    private array $postIds;

    private array $topStories;

    public function __construct(array $params)
    {
        $this->postIds = $params["postIds"] ?? [];

        $this->initTopStories();
    }

    /**
     * @desc TOP STORIES
     * @return PostDto[]
     */
    public function getTopStories() : array
    {
        return $this->topStories;
    }

    public function initTopStories()
    {
        $this->topStories = PostRepository::getInstance()->queryPosts($this->postIds);
    }

}

$topStories = new TopStories($args ?? []);

?>

<section class="class-offer-area section-padding border-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <!-- Section Tittle -->
                <div class="section-tittle  d-flex justify-content-between align-items-center">
                    <h2>Top Stories</h2>
                    <a href="#" class="browse-btn mb-20">More Stories</a>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($topStories->getTopStories() as $item): ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="properties pb-30">
                        <div class="properties__card">
                            <div class="properties__img">
                                <a href="<?= $item->getPermalink(); ?>">
                                    <img src="<?= $item->getPostThumbnailLarge(); ?>" alt="">
                                </a>
                            </div>
                            <div class="properties__caption text-center">
                                <h3><a href="<?= $item->getPermalink(); ?>"><?= $item->getPostTitle(); ?></a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php $topStories = null; ?>
