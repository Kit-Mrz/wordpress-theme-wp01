<?php

namespace Wp01\Inc\Dto;

/**
 * object(WP_Post)#4610 (24) {
 * ["ID"]=> int(1837)
 * ["post_author"]=> string(1) "1"
 * ["post_date"]=> string(19) "2022-11-29 18:09:29"
 * ["post_date_gmt"]=> string(19) "2022-11-29 10:09:29"
 * ["post_content"]=> string(161) "
* Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique."
* ["post_title"]=> string(8) "Programs"
 * ["post_excerpt"]=> string(0) ""
 * ["post_status"]=> string(7) "publish"
 * ["comment_status"]=> string(6) "closed"
 * ["ping_status"]=> string(6) "closed"
 * ["post_password"]=> string(0) ""
 * ["post_name"]=> string(8) "programs"
 * ["to_ping"]=> string(0) ""
 * ["pinged"]=> string(0) ""
 * ["post_modified"]=> string(19) "2022-11-30 17:50:06"
 * ["post_modified_gmt"]=> string(19) "2022-11-30 09:50:06"
 * ["post_content_filtered"]=> string(0) ""
 * ["post_parent"]=> int(0)
 * ["guid"]=> string(43) "http://wordpress-test.kit.com/?page_id=1837"
 * ["menu_order"]=> int(0)
 * ["post_type"]=> string(4) "page"
 * ["post_mime_type"]=> string(0) ""
 * ["comment_count"]=> string(1) "0"
 * ["filter"]=> string(3) "raw"
 * }
 */
class PostDto
{
    private int    $id;
    private int    $postAuthor;
    private string $postDate;
    private string $postDateGmt;
    private string $postContent;
    private string $postTitle;
    private string $postExcerpt;
    private string $postStatus;
    private string $commentStatus;
    private string $pingStatus;
    private string $postPassword;
    private string $postName;
    private string $toPing;
    private string $pinged;
    private string $postModified;
    private string $postModifiedGmt;
    private string $postContentFiltered;
    private int    $postParent;
    private string $guid;
    private int    $menuOrder;
    private string $postType;
    private string $postMimeType;
    private int    $commentCount;
    private string $filter;
    // Ext ********************************
    // 小图
    private string $postThumbnailSmall;
    // 中图
    private string $postThumbnailMedium;
    // 大图
    private string $postThumbnailLarge;
    // 原图
    private string $postThumbnailFull;
    // 固定链接
    private string $permalink;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PostDto
     */
    public function setId(int $id) : PostDto
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPostAuthor() : int
    {
        return $this->postAuthor;
    }

    /**
     * @param int $postAuthor
     * @return PostDto
     */
    public function setPostAuthor(int $postAuthor) : PostDto
    {
        $this->postAuthor = $postAuthor;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostDate() : string
    {
        return $this->postDate;
    }

    /**
     * @param string $postDate
     * @return PostDto
     */
    public function setPostDate(string $postDate) : PostDto
    {
        $this->postDate = $postDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostDateGmt() : string
    {
        return $this->postDateGmt;
    }

    /**
     * @param string $postDateGmt
     * @return PostDto
     */
    public function setPostDateGmt(string $postDateGmt) : PostDto
    {
        $this->postDateGmt = $postDateGmt;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostContent() : string
    {
        return $this->postContent;
    }

    /**
     * @param string $postContent
     * @return PostDto
     */
    public function setPostContent(string $postContent) : PostDto
    {
        $this->postContent = $postContent;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostTitle() : string
    {
        return $this->postTitle;
    }

    /**
     * @param string $postTitle
     * @return PostDto
     */
    public function setPostTitle(string $postTitle) : PostDto
    {
        $this->postTitle = $postTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostExcerpt() : string
    {
        return $this->postExcerpt;
    }

    /**
     * @param string $postExcerpt
     * @return PostDto
     */
    public function setPostExcerpt(string $postExcerpt) : PostDto
    {
        $this->postExcerpt = $postExcerpt;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostStatus() : string
    {
        return $this->postStatus;
    }

    /**
     * @param string $postStatus
     * @return PostDto
     */
    public function setPostStatus(string $postStatus) : PostDto
    {
        $this->postStatus = $postStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommentStatus() : string
    {
        return $this->commentStatus;
    }

    /**
     * @param string $commentStatus
     * @return PostDto
     */
    public function setCommentStatus(string $commentStatus) : PostDto
    {
        $this->commentStatus = $commentStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getPingStatus() : string
    {
        return $this->pingStatus;
    }

    /**
     * @param string $pingStatus
     * @return PostDto
     */
    public function setPingStatus(string $pingStatus) : PostDto
    {
        $this->pingStatus = $pingStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostPassword() : string
    {
        return $this->postPassword;
    }

    /**
     * @param string $postPassword
     * @return PostDto
     */
    public function setPostPassword(string $postPassword) : PostDto
    {
        $this->postPassword = $postPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostName() : string
    {
        return $this->postName;
    }

    /**
     * @param string $postName
     * @return PostDto
     */
    public function setPostName(string $postName) : PostDto
    {
        $this->postName = $postName;

        return $this;
    }

    /**
     * @return string
     */
    public function getToPing() : string
    {
        return $this->toPing;
    }

    /**
     * @param string $toPing
     * @return PostDto
     */
    public function setToPing(string $toPing) : PostDto
    {
        $this->toPing = $toPing;

        return $this;
    }

    /**
     * @return string
     */
    public function getPinged() : string
    {
        return $this->pinged;
    }

    /**
     * @param string $pinged
     * @return PostDto
     */
    public function setPinged(string $pinged) : PostDto
    {
        $this->pinged = $pinged;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostModified() : string
    {
        return $this->postModified;
    }

    /**
     * @param string $postModified
     * @return PostDto
     */
    public function setPostModified(string $postModified) : PostDto
    {
        $this->postModified = $postModified;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostModifiedGmt() : string
    {
        return $this->postModifiedGmt;
    }

    /**
     * @param string $postModifiedGmt
     * @return PostDto
     */
    public function setPostModifiedGmt(string $postModifiedGmt) : PostDto
    {
        $this->postModifiedGmt = $postModifiedGmt;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostContentFiltered() : string
    {
        return $this->postContentFiltered;
    }

    /**
     * @param string $postContentFiltered
     * @return PostDto
     */
    public function setPostContentFiltered(string $postContentFiltered) : PostDto
    {
        $this->postContentFiltered = $postContentFiltered;

        return $this;
    }

    /**
     * @return int
     */
    public function getPostParent() : int
    {
        return $this->postParent;
    }

    /**
     * @param int $postParent
     * @return PostDto
     */
    public function setPostParent(int $postParent) : PostDto
    {
        $this->postParent = $postParent;

        return $this;
    }

    /**
     * @return string
     */
    public function getGuid() : string
    {
        return $this->guid;
    }

    /**
     * @param string $guid
     * @return PostDto
     */
    public function setGuid(string $guid) : PostDto
    {
        $this->guid = $guid;

        return $this;
    }

    /**
     * @return int
     */
    public function getMenuOrder() : int
    {
        return $this->menuOrder;
    }

    /**
     * @param int $menuOrder
     * @return PostDto
     */
    public function setMenuOrder(int $menuOrder) : PostDto
    {
        $this->menuOrder = $menuOrder;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostType() : string
    {
        return $this->postType;
    }

    /**
     * @param string $postType
     * @return PostDto
     */
    public function setPostType(string $postType) : PostDto
    {
        $this->postType = $postType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostMimeType() : string
    {
        return $this->postMimeType;
    }

    /**
     * @param string $postMimeType
     * @return PostDto
     */
    public function setPostMimeType(string $postMimeType) : PostDto
    {
        $this->postMimeType = $postMimeType;

        return $this;
    }

    /**
     * @return int
     */
    public function getCommentCount() : int
    {
        return $this->commentCount;
    }

    /**
     * @param int $commentCount
     * @return PostDto
     */
    public function setCommentCount(int $commentCount) : PostDto
    {
        $this->commentCount = $commentCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilter() : string
    {
        return $this->filter;
    }

    /**
     * @param string $filter
     * @return PostDto
     */
    public function setFilter(string $filter) : PostDto
    {
        $this->filter = $filter;

        return $this;
    }

    // Ext ******************

    /**
     * @return string
     */
    public function getPostThumbnailSmall() : string
    {
        return $this->postThumbnailSmall;
    }

    /**
     * @param string $postThumbnailSmall
     * @return PostDto
     */
    public function setPostThumbnailSmall(string $postThumbnailSmall) : PostDto
    {
        $this->postThumbnailSmall = $postThumbnailSmall;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostThumbnailMedium() : string
    {
        return $this->postThumbnailMedium;
    }

    /**
     * @param string $postThumbnailMedium
     * @return PostDto
     */
    public function setPostThumbnailMedium(string $postThumbnailMedium) : PostDto
    {
        $this->postThumbnailMedium = $postThumbnailMedium;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostThumbnailLarge() : string
    {
        return $this->postThumbnailLarge;
    }

    /**
     * @param string $postThumbnailLarge
     * @return PostDto
     */
    public function setPostThumbnailLarge(string $postThumbnailLarge) : PostDto
    {
        $this->postThumbnailLarge = $postThumbnailLarge;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostThumbnailFull() : string
    {
        return $this->postThumbnailFull;
    }

    /**
     * @param string $postThumbnailFull
     * @return PostDto
     */
    public function setPostThumbnailFull(string $postThumbnailFull) : PostDto
    {
        $this->postThumbnailFull = $postThumbnailFull;

        return $this;
    }

    /**
     * @return string
     */
    public function getPermalink() : string
    {
        return $this->permalink;
    }

    /**
     * @param string $permalink
     * @return PostDto
     */
    public function setPermalink(string $permalink) : PostDto
    {
        $this->permalink = $permalink;

        return $this;
    }

    // 检索到当前文章作者页面的HTML链接。
    // get_the_author_posts_link

}
