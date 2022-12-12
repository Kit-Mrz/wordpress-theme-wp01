<?php

namespace Theme\Boot\Http\Service;

use Theme\Boot\Http\Repository\PageRepository;
use Theme\Boot\Http\Util\Singleton;

class PageService
{
    use Singleton;

    private $pageRepository;

    public function __construct()
    {
        $this->pageRepository = PageRepository::getInstance();
    }

    public function getHeroArea(int $pageId)
    {
        $page = $this->pageRepository->queryPage($pageId);

        $backgroundImage = get_post_meta($pageId, 'background-image', true);

        return [
            'postTitle'       => $page->getPostTitle(),
            'postContent'     => $page->getPostContent(),
            'backgroundImage' => $backgroundImage ?? "",
        ];
    }
}
