<?php

namespace Theme\Boot\Http\Service;

use Theme\Boot\Http\Repository\PageRepository;
use Theme\Boot\Http\Repository\PostRepository;
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

    public function getProgramsOfferPost(array $postIds)
    {
        $programs = PostRepository::getInstance()->queryPrograms($postIds);

        $listPrograms = [];

        foreach ($programs as $item) {
            $programContent = get_post_meta($item->getId(), 'program_content', true);

            $listPrograms[] = [
                'id'                 => $item->getId(),
                'postThumbnailLarge' => $item->getPostThumbnailLarge(),
                'permalink'          => $item->getPermalink(),
                'postTitle'          => $item->getPostTitle(),
                'postExcerpt'        => $item->getPostExcerpt(),
                'programContent'     => $programContent,
            ];
        }

        return $listPrograms;
    }

    public function getEndPost(array $postIds)
    {
        $programs = PostRepository::getInstance()->queryPrograms($postIds);
    }
}
