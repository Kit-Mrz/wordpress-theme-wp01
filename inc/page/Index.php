<?php

namespace Wp01\Inc\Page;

use Wp01\Inc\Repository\PostRepository;
use Wp01\Inc\Util\Singleton;
use Wp01\Inc\Dto\PostDto;

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
