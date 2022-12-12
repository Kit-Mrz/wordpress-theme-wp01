<?php

namespace Theme\Boot\Http\Page;

use Theme\Boot\Http\Repository\PostRepository;
use Theme\Boot\Http\Util\Singleton;
use Theme\Boot\Http\Dto\PostDto;

class Index
{
    use Singleton;

    public function __construct()
    {
    }

    /**
     * @desc Top single area
     * @return PostDto[]
     */
    public function getSingleArea()
    {
        return PostRepository::getInstance()->queryPosts([1]);
    }
}
