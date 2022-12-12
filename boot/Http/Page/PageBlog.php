<?php

namespace Theme\Boot\Http\Page;

use Theme\Boot\Http\Dto\AuthorDto;
use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Repository\AuthorRepository;
use Theme\Boot\Http\Repository\PostRepository;
use Theme\Boot\Http\Util\GeneralUtil;

class PageBlog
{
    /**
     * @var PostDto[]
     */
    private $posts;

    /**
     * @var array
     */
    private array $postAuthorIds;

    /**
     * @var AuthorDto[]
     */
    private array $postAuthors;

    /**
     * @var AuthorDto[]
     */
    private array $mapPostAuthors;

    public function __construct(array $params)
    {
        $this->initPosts();
        $this->initPostAuthorIds();
        $this->initPostAuthors();
        $this->initMapPostAuthors();
    }

    protected function initPosts()
    {
        $inputParams = [
            'paged' => $_GET['paged'] ?? 1,
        ];
        // 默认查询最新的
        $this->posts = PostRepository::getInstance()->queryPostSlipPage($inputParams);
    }

    /**
     * @return PostDto[]
     */
    public function getPosts() : array
    {
        return $this->posts;
    }

    protected function initPostAuthorIds()
    {
        if (is_array($this->posts)) {
            $ids = [];
            foreach ($this->posts as $post) {
                $ids[] = $post->getPostAuthor();
            }
            $this->postAuthorIds = $ids;
        }
    }

    /**
     * @return array
     */
    public function getPostAuthorIds() : array
    {
        return $this->postAuthorIds;
    }

    protected function initPostAuthors()
    {
        $this->postAuthors = AuthorRepository::getInstance()->queryAuthors($this->getPostAuthorIds());
    }

    /**
     * @return AuthorDto[]
     */
    public function getPostAuthors() : array
    {
        return $this->postAuthors;
    }

    public function initMapPostAuthors()
    {
        $postAuthors = $this->getPostAuthors();

        $map = [];
        foreach ($postAuthors as $item) {
            $map[$item->getId()] = $item;
        }

        $this->mapPostAuthors = $map;
    }

    /**
     * @return array
     */
    public function getMapPostAuthors() : array
    {
        return $this->mapPostAuthors;
    }

    public function getPostAuthorDto(int $id)
    {
        return $this->getMapPostAuthors()[$id] ?? null;
    }

    public function listBlogs() : array
    {
        $list = [];

        foreach ($this->getPosts() as $item) {
            //
            $thumbnail = empty($item->getPostThumbnailLarge()) ? GeneralUtil::getThemeFileUri() . "/assets/img/gallery/blog3.jpg" : $item->getPostThumbnailLarge();
            //
            $postAuthor = $this->getPostAuthorDto($item->getPostAuthor());
            $postAuthor = is_null($postAuthor) ? "" : $postAuthor->getDisplayName();

            $temp = [
                'postThumbnail'  => $thumbnail,
                'permalink'      => $item->getPermalink(),
                'day'            => date('d', strtotime($item->getPostDateGmt())),
                'month'          => date('F', strtotime($item->getPostDateGmt())),
                'postTitle'      => $item->getPostTitle(),
                'authorPostsUrl' => get_author_posts_url($item->getPostAuthor()),
                'postExcerpt'    => strip_tags($item->getPostExcerpt()),
                'postAuthor'     => $postAuthor,
                'commentCount'   => $item->getCommentCount(),
            ];

            $list[] = $temp;
        }

        return $list;
    }

}
