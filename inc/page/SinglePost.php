<?php

namespace Wp01\Inc\Page;

use Wp01\Inc\Ext\PostView;
use Wp01\Inc\Repository\AuthorRepository;
use Wp01\Inc\Repository\CommentRepository;
use Wp01\Inc\Util\ConvertUtil;

class SinglePost
{
    private $dto;

    private $post;

    private $postAuthor;

    private PostView $postView;

    private $comments;

    public function __construct(array $params)
    {
        if (isset($params['queriedObject']) && $params['queriedObject'] instanceof \WP_Post) {
            $this->dto = ConvertUtil::convertPostDto($params['queriedObject']);
        } else {
            throw new \RuntimeException();
        }

        $this->initQueriedObject();

        $this->initPostAuthor();

        $this->initPostView();

        $this->initComments();;
    }

    public function initPostView()
    {
        $this->postView = new PostView($this->dto->getId());
    }

    public function initQueriedObject()
    {
        $authorId = $this->dto->getPostAuthor();

        $authors = AuthorRepository::getInstance()->queryAuthors([$authorId]);

        if (empty($authors)) {
            throw new \RuntimeException();
        }
        $authors = array_shift($authors);

        $this->post = [
            // 上一篇
            'prev'       => $this->getPrev(),
            // 下一篇
            'next'       => $this->getNext(),
            // 作者
            'postAuthor' => $this->dto->getPostAuthor(),

            'postThumbnail' => $this->dto->getPostThumbnailLarge(),
            'postTitle'     => $this->dto->getPostTitle(),
            'postExcerpt'   => $this->dto->getPostExcerpt(),
            'postContent'   => $this->dto->getPostContent(),
            'commentCount'  => $this->dto->getCommentCount(),

            'authors' => [
                'displayName'    => $authors->getDisplayName(),
                'userUrl'        => $authors->getUserUrl(),
                'authorPostsUrl' => $authors->getAuthorPostsUrl(),
            ],
        ];
    }

    public function getPrev() : array
    {
        $prev = get_adjacent_post(false, "", true);

        if (empty($prev)) {
            return [];
        }

        $prevDto = ConvertUtil::convertPostDto($prev);

        // get_previous_post_link("%link", "<h4 style=\"color: #2d2d2d;\">%title</h4>"),

        return [
            'postThumbnailSmall' => $prevDto->getPostThumbnailSmall(),
            'permalink'          => $prevDto->getPermalink(),
            'postTitle'          => $prevDto->getPostTitle(),
        ];
    }

    public function getNext() : array
    {
        $next = get_adjacent_post(false, "", false);

        if (empty($next)) {
            return [];
        }

        $nextDto = ConvertUtil::convertPostDto($next);

        // get_next_post_link("%link", "<h4 style=\"color: #2d2d2d;\">%title</h4>"),

        return [
            'postThumbnailSmall' => $nextDto->getPostThumbnailSmall(),
            'permalink'          => $nextDto->getPermalink(),
            'postTitle'          => $nextDto->getPostTitle(),
        ];
    }

    public function initPostAuthor()
    {
        $this->postAuthor = [];

        $post = $this->getQueriedObject();

        $authors = AuthorRepository::getInstance()->queryAuthors([$post['postAuthor']]);

        if (empty($authors)) {
            throw new \RuntimeException();
        }

        $author = array_shift($authors);

        $this->postAuthor = [
            'authorPostsUrl' => $author->getAuthorPostsUrl(),
            'displayName'    => $author->getDisplayName(),
            'avatar'         => get_avatar($author->getId()),
            'avatarUrl'      => get_avatar_url($author->getId()),
            'description'    => $author->getDescription(),
        ];
    }

    /**
     * @return mixed
     */
    public function getPostAuthor()
    {
        return $this->postAuthor;
    }

    public function getQueriedObject()
    {
        return $this->post;
    }

    /**
     * @return PostView
     */
    public function getPostView()
    {
        return $this->postView;
    }

    public function initComments()
    {
        $this->comments = [];

        $comments = CommentRepository::getInstance()->queryPostComment($this->dto->getId());

        $userIds = [];
        foreach ($comments as $comment) {
            $userIds[] = $comment->getUserId();
        }

        $authors = AuthorRepository::getInstance()->queryAuthors($userIds);

        foreach ($comments as $comment) {
            $displayName    = '';
            $authorPostsUrl = '';
            $avatarUrl      = '';

            if (isset($authors[$comment->getUserId()])) {
                $author         = $authors[$comment->getUserId()];
                $displayName    = $author->getDisplayName();
                $authorPostsUrl = $author->getAuthorPostsUrl();
                $avatarUrl      = get_avatar_url($author->getId());
            }

            $this->comments[] = [
                'userId'           => $comment->getUserId(),
                'displayName'      => $displayName,
                'authorPostsUrl'   => $authorPostsUrl,
                'avatarUrl'        => $avatarUrl,
                'commentAuthor'    => $comment->getCommentAuthor(),
                'commentAuthorUrl' => $comment->getCommentAuthorUrl(),
                'commentContent'   => $comment->getCommentContent(),
                'commentDateGmt'   => date('F d,Y ', strtotime($comment->getCommentDateGmt())),
            ];
        }
    }

    /**
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

}
