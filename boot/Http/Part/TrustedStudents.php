<?php
namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Repository\PostRepository;

class TrustedStudents
{
    private array $postIds;

    public function __construct(array $params)
    {
        $this->postIds = (array) ($params['postIds'] ?? []);
    }

    /**
     * @desc End
     * @return PostDto[]
     */
    public function getEndPost() : array
    {
        if ( !isset($this->postIds)) {
            return [];
        }

        if (empty($this->postIds)) {
            return [];
        }

        return PostRepository::getInstance()->queryPosts($this->postIds);
    }
}

$trustedStudents = new TrustedStudents($args ?? []);

?>
<!--? Visit o n e -->
<section class="visit-one fix">
    <!--left Contents  -->
    <div class="visit-team">
        <div class="wrapper"></div>
    </div>
    <!-- Right Contents -->
    <div class="tailor-details">
        <?php foreach ($trustedStudents->getEndPost() as $item): ?>
            <div class="section-tittle section-tittle2 mb-25">
                <h2><?= $item->getPostTitle(); ?></h2>
                <p class="mb-30"><?= strip_tags($item->getPostContent()); ?></p>
                <a href="<?= $item->getPermalink(); ?>" class="browse-btn browse-btn2 mt-20">Join Now</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php $trustedStudents = null; ?>
