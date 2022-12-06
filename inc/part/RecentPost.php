<?php

namespace Wp01\Inc\Part;

use Wp01\Inc\Repository\PostRepository;

class RecentPost
{
    private array $recentPost;

    public function __construct()
    {
        $this->initPosts();
    }

    protected function initPosts()
    {
        $recentPost = PostRepository::getInstance()->queryRecentPost([]);

        $this->recentPost = [];

        foreach ($recentPost as $item) {
            $postDateGmt = strtotime($item->getPostDateGmt());

            $postThumbnailSmall = $item->getPostThumbnailMedium();

            if (empty($postThumbnailSmall)) {
                $postThumbnailSmall = get_theme_file_uri() . '/assets/img/post/post_10.jpg';
            }

            $this->recentPost[] = [
                'permalink'          => $item->getPermalink(),
                'postThumbnailSmall' => $postThumbnailSmall,
                'postTitle'              => $item->getPostTitle(),
                'year'               => date('Y', $postDateGmt),
                'monthText'          => date('F', $postDateGmt),
                'month'              => date('m', $postDateGmt),
                'day'                => date('d', $postDateGmt),
            ];
        }
    }

    /**
     * @return array
     */
    public function getRecentPost() : array
    {
        return $this->recentPost;
    }

}

$recentPost = new RecentPost();

?>

<aside class="single_sidebar_widget popular_post_widget">
    <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
    <?php foreach($recentPost->getRecentPost() as $item) : ?>
    <div class="media post_item">
        <img width="80" height="80" src="<?= $item['postThumbnailSmall'];?>" alt="post">
        <div class="media-body">
            <a href="<?= $item['permalink'];?>">
                <h3 style="color: #2d2d2d;"><?= $item['postTitle'];?></h3>
            </a>
            <p>January 12, 2019</p>
        </div>
    </div>
    <?php endforeach;?>
</aside>

<?php $recentPost = null; ?>
