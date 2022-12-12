<?php

namespace Theme\Boot\Http\Entity;

use WP_Comment;

class CommentEntity
{
    private $commentId;
    private $commentPostId      = 0;
    private $commentAuthor      = '';
    private $commentAuthorEmail = '';
    private $commentAuthorUrl   = '';
    private $commentAuthorIp    = '';
    private $commentDate        = '0000-00-00 00:00:00';
    private $commentDateGmt     = '0000-00-00 00:00:00';
    private $commentContent;
    private $commentKarma       = 0;
    private $commentApproved    = '1';
    private $commentAgent       = '';
    private $commentType        = 'comment';
    private $commentParent      = 0;
    private $userId             = 0;
    private $children;

    public function __construct(WP_Comment $comment)
    {
        $this->setCommentId($comment->comment_ID);
        $this->setCommentPostId($comment->comment_post_ID);
        $this->setCommentAuthor($comment->comment_author);
        $this->setCommentAuthorEmail($comment->comment_author_email);
        $this->setCommentAuthorUrl($comment->comment_author_url);
        $this->setCommentAuthorIp($comment->comment_author_IP);
        $this->setCommentDate($comment->comment_date);
        $this->setCommentDateGmt($comment->comment_date_gmt);
        $this->setCommentContent($comment->comment_content);
        $this->setCommentKarma($comment->comment_karma);
        $this->setCommentApproved($comment->comment_approved);
        $this->setCommentAgent($comment->comment_agent);
        $this->setCommentType($comment->comment_type);
        $this->setCommentParent($comment->comment_parent);
        $this->setUserId($comment->user_id);
        $this->setChildren($comment->get_children());
    }

    /**
     * @return mixed
     */
    public function getCommentId()
    {
        return $this->commentId;
    }

    /**
     * @param mixed $commentId
     */
    public function setCommentId($commentId) : void
    {
        $this->commentId = $commentId;
    }

    /**
     * @return int
     */
    public function getCommentPostId() : int
    {
        return $this->commentPostId;
    }

    /**
     * @param int $commentPostId
     */
    public function setCommentPostId(int $commentPostId) : void
    {
        $this->commentPostId = $commentPostId;
    }

    /**
     * @return string
     */
    public function getCommentAuthor() : string
    {
        return $this->commentAuthor;
    }

    /**
     * @param string $commentAuthor
     */
    public function setCommentAuthor(string $commentAuthor) : void
    {
        $this->commentAuthor = $commentAuthor;
    }

    /**
     * @return string
     */
    public function getCommentAuthorEmail() : string
    {
        return $this->commentAuthorEmail;
    }

    /**
     * @param string $commentAuthorEmail
     */
    public function setCommentAuthorEmail(string $commentAuthorEmail) : void
    {
        $this->commentAuthorEmail = $commentAuthorEmail;
    }

    /**
     * @return string
     */
    public function getCommentAuthorUrl() : string
    {
        return $this->commentAuthorUrl;
    }

    /**
     * @param string $commentAuthorUrl
     */
    public function setCommentAuthorUrl(string $commentAuthorUrl) : void
    {
        $this->commentAuthorUrl = $commentAuthorUrl;
    }

    /**
     * @return string
     */
    public function getCommentAuthorIp() : string
    {
        return $this->commentAuthorIp;
    }

    /**
     * @param string $commentAuthorIp
     */
    public function setCommentAuthorIp(string $commentAuthorIp) : void
    {
        $this->commentAuthorIp = $commentAuthorIp;
    }

    /**
     * @return string
     */
    public function getCommentDate() : string
    {
        return $this->commentDate;
    }

    /**
     * @param string $commentDate
     */
    public function setCommentDate(string $commentDate) : void
    {
        $this->commentDate = $commentDate;
    }

    /**
     * @return string
     */
    public function getCommentDateGmt() : string
    {
        return $this->commentDateGmt;
    }

    /**
     * @param string $commentDateGmt
     */
    public function setCommentDateGmt(string $commentDateGmt) : void
    {
        $this->commentDateGmt = $commentDateGmt;
    }

    /**
     * @return mixed
     */
    public function getCommentContent()
    {
        return $this->commentContent;
    }

    /**
     * @param mixed $commentContent
     */
    public function setCommentContent($commentContent) : void
    {
        $this->commentContent = $commentContent;
    }

    /**
     * @return int
     */
    public function getCommentKarma() : int
    {
        return $this->commentKarma;
    }

    /**
     * @param int $commentKarma
     */
    public function setCommentKarma(int $commentKarma) : void
    {
        $this->commentKarma = $commentKarma;
    }

    /**
     * @return string
     */
    public function getCommentApproved() : string
    {
        return $this->commentApproved;
    }

    /**
     * @param string $commentApproved
     */
    public function setCommentApproved(string $commentApproved) : void
    {
        $this->commentApproved = $commentApproved;
    }

    /**
     * @return string
     */
    public function getCommentAgent() : string
    {
        return $this->commentAgent;
    }

    /**
     * @param string $commentAgent
     */
    public function setCommentAgent(string $commentAgent) : void
    {
        $this->commentAgent = $commentAgent;
    }

    /**
     * @return string
     */
    public function getCommentType() : string
    {
        return $this->commentType;
    }

    /**
     * @param string $commentType
     */
    public function setCommentType(string $commentType) : void
    {
        $this->commentType = $commentType;
    }

    /**
     * @return int
     */
    public function getCommentParent() : int
    {
        return $this->commentParent;
    }

    /**
     * @param int $commentParent
     */
    public function setCommentParent(int $commentParent) : void
    {
        $this->commentParent = $commentParent;
    }

    /**
     * @return int
     */
    public function getUserId() : int
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId(int $userId) : void
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param mixed $children
     */
    public function setChildren($children) : void
    {
        $this->children = $children;
    }

}
