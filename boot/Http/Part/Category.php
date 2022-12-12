<?php

namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Repository\TermRepository;

class Category
{
    /**
     * @var array
     */
    private array $categories;

    public function __construct()
    {
        $this->initCategories();
    }

    public function initCategories()
    {
        $params = [
            'taxonomy'   => 'category',
            'include'    => [2, 15, 3, 4, 48],
            'orderby'    => 'count',
            'order'      => 'asc',
            'hide_empty' => false,
        ];

        $categories = TermRepository::getInstance()->queryCategories($params);

        $list = [];
        foreach ($categories as $item) {
            $list[] = [
                'name'      => $item->getName(),
                'count'     => $item->getCount(),
                'permalink' => get_category_link($item->getTermId()),
            ];
        }

        $this->categories = $list;
    }

    public function getCategories()
    {
        return $this->categories;
    }

}

$category = new Category();

?>

<aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
    <ul class="list cat-list">
        <?php foreach ($category->getCategories() as $item): ?>
            <li>
                <a href="<?= $item['permalink']; ?>" class="d-flex">
                    <p><?= $item['name']; ?></p>
                    <p>(<?= $item['count']; ?>)</p>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</aside>

<?php $category = null; ?>
