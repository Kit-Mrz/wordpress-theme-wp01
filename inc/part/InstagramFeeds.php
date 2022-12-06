<?php

namespace Wp01\Inc\Part;

use Wp01\Inc\Repository\PostRepository;

class InstagramFeeds
{

    private array $instagramFeeds;

    public function __construct()
    {
        $this->initInstagramFeeds();
    }

    public function initInstagramFeeds()
    {
        $this->instagramFeeds = [];

        $instagramFeeds = PostRepository::getInstance()->queryThumbnailPosts();

        foreach ($instagramFeeds as $item) {
            $this->instagramFeeds[] = [
                'permalink'          => $item->getPermalink(),
                'postThumbnail'      => get_the_post_thumbnail($item->getId(), 'thumbnail'),
                'postThumbnailSmall' => $item->getPostThumbnailSmall(),
            ];
        }
    }

    /**
     * @return array
     */
    public function getInstagramFeeds() : array
    {
        return $this->instagramFeeds;
    }

}

$instagramFeeds = new InstagramFeeds();

?>

<aside class="single_sidebar_widget instagram_feeds">
    <h4 class="widget_title" style="color: #2d2d2d;">Instagram Feeds</h4>
    <ul class="instagram_row flex-wrap">
        <?php foreach ($instagramFeeds->getInstagramFeeds() as $item): ?>
            <li>
                <a href="<?= $item['permalink']; ?>">
                    <img class="img-fluid" src="<?= $item['postThumbnailSmall']; ?>" alt="">
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>
