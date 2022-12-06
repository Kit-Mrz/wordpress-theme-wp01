<?php

namespace Wp01\Inc\Dto;

class CommentDto
{
    /**
     * Comment ID.
     *
     * A numeric string, for compatibility reasons.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentId;

    /**
     * ID of the post the comment is associated with.
     *
     * A numeric string, for compatibility reasons.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentPostId = 0;

    /**
     * Comment author name.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentAuthor = '';

    /**
     * Comment author email address.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentAuthorEmail = '';

    /**
     * Comment author URL.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentAuthorUrl = '';

    /**
     * Comment author IP address (IPv4 format).
     *
     * @since 4.4.0
     * @var string
     */
    private $commentAuthorIp = '';

    /**
     * Comment date in YYYY-MM-DD HH:MM:SS format.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentDate = '0000-00-00 00:00:00';

    /**
     * Comment GMT date in YYYY-MM-DD HH::MM:SS format.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentDateGmt = '0000-00-00 00:00:00';

    /**
     * Comment content.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentContent;

    /**
     * Comment karma count.
     *
     * A numeric string, for compatibility reasons.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentKarma = 0;

    /**
     * Comment approval status.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentApproved = '1';

    /**
     * Comment author HTTP user agent.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentAgent = '';

    /**
     * Comment type.
     *
     * @since 4.4.0
     * @since 5.5.0 Default value changed to `comment`.
     * @var string
     */
    private $commentType = 'comment';

    /**
     * Parent comment ID.
     *
     * A numeric string, for compatibility reasons.
     *
     * @since 4.4.0
     * @var string
     */
    private $commentParent = 0;

    /**
     * Comment author ID.
     *
     * A numeric string, for compatibility reasons.
     *
     * @since 4.4.0
     * @var string
     */
    private $userId = 0;

    /**
     * Comment children.
     *
     * @since 4.4.0
     * @var array
     */
    private $children;

    private $postFields;

    /**
     * @return string
     */
    public function getCommentId() : string
    {
        return $this->commentId;
    }

    /**
     * @param string $commentId
     * @return CommentDto
     */
    public function setCommentId(string $commentId) : CommentDto
    {
        $this->commentId = $commentId;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getCommentPostId()
    {
        return $this->commentPostId;
    }

    /**
     * @param int|string $commentPostId
     * @return CommentDto
     */
    public function setCommentPostId($commentPostId)
    {
        $this->commentPostId = $commentPostId;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentAuthor(string $commentAuthor) : CommentDto
    {
        $this->commentAuthor = $commentAuthor;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentAuthorEmail(string $commentAuthorEmail) : CommentDto
    {
        $this->commentAuthorEmail = $commentAuthorEmail;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentAuthorUrl(string $commentAuthorUrl) : CommentDto
    {
        $this->commentAuthorUrl = $commentAuthorUrl;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentAuthorIp(string $commentAuthorIp) : CommentDto
    {
        $this->commentAuthorIp = $commentAuthorIp;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentDate(string $commentDate) : CommentDto
    {
        $this->commentDate = $commentDate;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentDateGmt(string $commentDateGmt) : CommentDto
    {
        $this->commentDateGmt = $commentDateGmt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCommentContent() : string
    {
        return $this->commentContent;
    }

    /**
     * @param string $commentContent
     * @return CommentDto
     */
    public function setCommentContent(string $commentContent) : CommentDto
    {
        $this->commentContent = $commentContent;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getCommentKarma()
    {
        return $this->commentKarma;
    }

    /**
     * @param int|string $commentKarma
     * @return CommentDto
     */
    public function setCommentKarma($commentKarma)
    {
        $this->commentKarma = $commentKarma;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentApproved(string $commentApproved) : CommentDto
    {
        $this->commentApproved = $commentApproved;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentAgent(string $commentAgent) : CommentDto
    {
        $this->commentAgent = $commentAgent;

        return $this;
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
     * @return CommentDto
     */
    public function setCommentType(string $commentType) : CommentDto
    {
        $this->commentType = $commentType;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getCommentParent()
    {
        return $this->commentParent;
    }

    /**
     * @param int|string $commentParent
     * @return CommentDto
     */
    public function setCommentParent($commentParent)
    {
        $this->commentParent = $commentParent;

        return $this;
    }

    /**
     * @return int|string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int|string $userId
     * @return CommentDto
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * @return array
     */
    public function getChildren() : array
    {
        return $this->children;
    }

    /**
     * @param array $children
     * @return CommentDto
     */
    public function setChildren(array $children) : CommentDto
    {
        $this->children = $children;

        return $this;
    }

}
