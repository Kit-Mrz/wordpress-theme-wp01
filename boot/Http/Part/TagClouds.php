<?php

namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Repository\TermRepository;

class TagClouds
{

    /**
     * @var array
     */
    private array $postTags;

    public function __construct()
    {
        $this->initPostTags();
    }

    protected function initPostTags()
    {
        $params = [
            'taxonomy'   => 'post_tag',
            'orderby'    => 'name',
            'order'      => 'ASC',
            'hide_empty' => false,
            'number'     => 10,
        ];

        $tags = TermRepository::getInstance()->queryPostTag($params);

        $this->postTags = [];

        foreach ($tags as $item) {
            $this->postTags[] = [
                'name'      => $item->getName(),
                'permalink' => get_tag_link($item->getTermId()),
            ];
        }
    }

    /**
     * @return array
     */
    public function getPostTags() : array
    {
        return $this->postTags;
    }

}

$tagClouds = new TagClouds();

?>
<aside class="single_sidebar_widget tag_cloud_widget">
    <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
    <ul class="list">
        <?php foreach ($tagClouds->getPostTags() as $item): ?>
            <li>
                <a href="<?= $item['permalink']; ?>"><?= $item['name']; ?></a>
            </li>
        <?php endforeach; ?>

    </ul>
</aside>
