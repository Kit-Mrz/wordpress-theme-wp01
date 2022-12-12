<?php

namespace Theme\Boot\Http\Entity;

use WP_Post;

class PostEntity
{
    // ID: 46
    // post_author: "1"
    // post_date: "2022-12-07 10:31:43"
    // post_date_gmt: "2022-12-07 02:31:43"
    // post_content: "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
    // Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit  ▶"
    // post_title: "T-Shirt with Logo"
    // post_excerpt: "This is a simple product."
    // post_status: "publish"
    // comment_status: "open"
    // ping_status: "closed"
    // post_password: ""
    // post_name: "t-shirt-with-logo"
    // to_ping: ""
    // pinged: ""
    // post_modified: "2022-12-07 10:32:12"
    // post_modified_gmt: "2022-12-07 02:32:12"
    // post_content_filtered: ""
    // post_parent: 0
    // guid: "http://wordpress-test.kit.com/?post_type=product&#038;p=46"
    // menu_order: 0
    // post_type: "product"
    // post_mime_type: ""
    // comment_count: "0"
    // filter: "raw"

    private ?int    $id;
    private ?int    $postAuthor;
    private ?string $postDate;
    private ?string $postDateGmt;
    private ?string $postContent;
    private ?string $postTitle;
    private ?string $postExcerpt;
    private ?string $postStatus;
    private ?string $commentStatus;
    private ?string $pingStatus;
    private ?string $postPassword;
    private ?string $postName;
    private ?string $toPing;
    private ?string $pinged;
    private ?string $postModified;
    private ?string $postModifiedGmt;
    private ?string $postContentFiltered;
    private ?int    $postParent;
    private ?string $guid;
    private ?int    $menuOrder;
    private ?string $post_type;
    private ?string $postMimeType;
    private ?int    $commentCount;
    private ?string $filter;
    private WP_Post $post;

    public function __construct(WP_Post $post)
    {
        $this->setId($post->ID);
        $this->setPostAuthor($post->post_author);
        $this->setPostDate($post->post_date);
        $this->setPostDateGmt($post->post_date_gmt);
        $this->setPostContent($post->post_content);
        $this->setPostTitle($post->post_title);
        $this->setPostExcerpt($post->post_excerpt);
        $this->setPostStatus($post->post_status);
        $this->setCommentStatus($post->comment_status);
        $this->setPingStatus($post->ping_status);
        $this->setPostPassword($post->post_password);
        $this->setPostName($post->post_name);
        $this->setToPing($post->to_ping);
        $this->setPinged($post->pinged);
        $this->setPostModified($post->post_modified);
        $this->setPostModifiedGmt($post->post_modified_gmt);
        $this->setPostContentFiltered($post->post_content_filtered);
        $this->setPostParent($post->post_parent);
        $this->setGuid($post->guid);
        $this->setMenuOrder($post->menu_order);
        $this->setPostType($post->post_type);
        $this->setPostMimeType($post->post_mime_type);
        $this->setCommentCount($post->comment_count);
        $this->setFilter($post->filter);
        $this->setPost($post);
    }

    /**
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     * @return PostEntity
     */
    public function setId(?int $id) : PostEntity
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPostAuthor() : ?int
    {
        return $this->postAuthor;
    }

    /**
     * @param int|null $postAuthor
     * @return PostEntity
     */
    public function setPostAuthor(?int $postAuthor) : PostEntity
    {
        $this->postAuthor = $postAuthor;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostDate() : ?string
    {
        return $this->postDate;
    }

    /**
     * @param string|null $postDate
     * @return PostEntity
     */
    public function setPostDate(?string $postDate) : PostEntity
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostDateGmt() : ?string
    {
        return $this->postDateGmt;
    }

    /**
     * @param string|null $postDateGmt
     * @return PostEntity
     */
    public function setPostDateGmt(?string $postDateGmt) : PostEntity
    {
        $this->postDateGmt = $postDateGmt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostContent() : ?string
    {
        return $this->postContent;
    }

    /**
     * @param string|null $postContent
     * @return PostEntity
     */
    public function setPostContent(?string $postContent) : PostEntity
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostTitle() : ?string
    {
        return $this->postTitle;
    }

    /**
     * @param string|null $postTitle
     * @return PostEntity
     */
    public function setPostTitle(?string $postTitle) : PostEntity
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostExcerpt() : ?string
    {
        return $this->postExcerpt;
    }

    /**
     * @param string|null $postExcerpt
     * @return PostEntity
     */
    public function setPostExcerpt(?string $postExcerpt) : PostEntity
    {
        $this->postExcerpt = $postExcerpt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostStatus() : ?string
    {
        return $this->postStatus;
    }

    /**
     * @param string|null $postStatus
     * @return PostEntity
     */
    public function setPostStatus(?string $postStatus) : PostEntity
    {
        $this->postStatus = $postStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommentStatus() : ?string
    {
        return $this->commentStatus;
    }

    /**
     * @param string|null $commentStatus
     * @return PostEntity
     */
    public function setCommentStatus(?string $commentStatus) : PostEntity
    {
        $this->commentStatus = $commentStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPingStatus() : ?string
    {
        return $this->pingStatus;
    }

    /**
     * @param string|null $pingStatus
     * @return PostEntity
     */
    public function setPingStatus(?string $pingStatus) : PostEntity
    {
        $this->pingStatus = $pingStatus;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostPassword() : ?string
    {
        return $this->postPassword;
    }

    /**
     * @param string|null $postPassword
     * @return PostEntity
     */
    public function setPostPassword(?string $postPassword) : PostEntity
    {
        $this->postPassword = $postPassword;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostName() : ?string
    {
        return $this->postName;
    }

    /**
     * @param string|null $postName
     * @return PostEntity
     */
    public function setPostName(?string $postName) : PostEntity
    {
        $this->postName = $postName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getToPing() : ?string
    {
        return $this->toPing;
    }

    /**
     * @param string|null $toPing
     * @return PostEntity
     */
    public function setToPing(?string $toPing) : PostEntity
    {
        $this->toPing = $toPing;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPinged() : ?string
    {
        return $this->pinged;
    }

    /**
     * @param string|null $pinged
     * @return PostEntity
     */
    public function setPinged(?string $pinged) : PostEntity
    {
        $this->pinged = $pinged;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostModified() : ?string
    {
        return $this->postModified;
    }

    /**
     * @param string|null $postModified
     * @return PostEntity
     */
    public function setPostModified(?string $postModified) : PostEntity
    {
        $this->postModified = $postModified;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostModifiedGmt() : ?string
    {
        return $this->postModifiedGmt;
    }

    /**
     * @param string|null $postModifiedGmt
     * @return PostEntity
     */
    public function setPostModifiedGmt(?string $postModifiedGmt) : PostEntity
    {
        $this->postModifiedGmt = $postModifiedGmt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostContentFiltered() : ?string
    {
        return $this->postContentFiltered;
    }

    /**
     * @param string|null $postContentFiltered
     * @return PostEntity
     */
    public function setPostContentFiltered(?string $postContentFiltered) : PostEntity
    {
        $this->postContentFiltered = $postContentFiltered;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPostParent() : ?int
    {
        return $this->postParent;
    }

    /**
     * @param int|null $postParent
     * @return PostEntity
     */
    public function setPostParent(?int $postParent) : PostEntity
    {
        $this->postParent = $postParent;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGuid() : ?string
    {
        return $this->guid;
    }

    /**
     * @param string|null $guid
     * @return PostEntity
     */
    public function setGuid(?string $guid) : PostEntity
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMenuOrder() : ?int
    {
        return $this->menuOrder;
    }

    /**
     * @param int|null $menuOrder
     * @return PostEntity
     */
    public function setMenuOrder(?int $menuOrder) : PostEntity
    {
        $this->menuOrder = $menuOrder;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostType() : ?string
    {
        return $this->post_type;
    }

    /**
     * @param string|null $post_type
     * @return PostEntity
     */
    public function setPostType(?string $post_type) : PostEntity
    {
        $this->post_type = $post_type;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostMimeType() : ?string
    {
        return $this->postMimeType;
    }

    /**
     * @param string|null $postMimeType
     * @return PostEntity
     */
    public function setPostMimeType(?string $postMimeType) : PostEntity
    {
        $this->postMimeType = $postMimeType;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCommentCount() : ?int
    {
        return $this->commentCount;
    }

    /**
     * @param int|null $commentCount
     * @return PostEntity
     */
    public function setCommentCount(?int $commentCount) : PostEntity
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFilter() : ?string
    {
        return $this->filter;
    }

    /**
     * @param string|null $filter
     * @return PostEntity
     */
    public function setFilter(?string $filter) : PostEntity
    {
        $this->filter = $filter;

        return $this;
    }

    /**
     * @return WP_Post
     */
    public function getPost() : WP_Post
    {
        return $this->post;
    }

    /**
     * @param WP_Post $post
     * @return PostEntity
     */
    public function setPost(WP_Post $post) : PostEntity
    {
        $this->post = $post;

        return $this;
    }

}
