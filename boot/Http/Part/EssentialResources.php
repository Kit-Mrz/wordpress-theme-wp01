<?php
namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Repository\PostRepository;

class EssentialResources
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
    public function getSelectionForth() : array
    {
        return PostRepository::getInstance()->queryPosts($this->postIds);
    }

}

$essentialResources = new EssentialResources($args ?? []);

?>
<section class="visit-three fix">
    <!--left Contents  -->
    <div class="tailor-details">
        <div class="section-tittle mb-40">
            <h2>Essential resources</h2>
            <p>Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula.<br> Integer efficitur
                tellus metus, sed feugiat leo posuere.</p>
        </div>
        <!-- Single -->
        <?php foreach ($essentialResources->getSelectionForth() as $item): ?>
            <div class="single-gallery mb-15">
                <div class="thumb-content-box d-flex">
                    <div class="thumb-content">
                        <div class="capt">
                            <h3><?= $item->getPostTitle(); ?></h3>
                            <p><?= $item->getPostExcerpt(); ?></p>
                        </div>
                        <a href="<?= $item->getPermalink(); ?>"><i class="ti-angle-right"></i></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
    <!-- Right Contents -->
    <div class="visit-team"></div>
</section>
<?php $essentialResources = null; ?>
