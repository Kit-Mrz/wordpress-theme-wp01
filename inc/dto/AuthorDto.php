<?php

namespace Wp01\Inc\Dto;

class AuthorDto
{
    /**
     *
     * 1. 发布时间
     * the_time('Y-m-d')
     *
     * 2. 文章分类
     * the_category(',')
     *
     * 3. 记录访问次数(在循环外)
     * 在循环外，使用默认查询获取文章 ID : get_querited_object_id()
     * wordpresskt_set_postviews(get_querited_object_id())
     *
     * 4. 获取访问次数
     * wordpresskt_get_postviews(get_the_ID());
     *
     * 5. 作者信息
     * get_the_author() ， the_author() 这个已经不建议使用
     *
     * 6. 获取用户ID
     * get_the_author_meta('ID')
     *
     * 7. 获取用户头像
     * get_avatar(get_the_author_meta('ID') , 24)
     * 24 表示尺寸
     *
     * 8. 获取用户链接
     * get_author_posts_url(get_the_author_meta('ID'))
     * get_the_author_meta();
     *
     *   [data] => stdClass Object
     * (
     * [ID] => 1
     * [user_login] => admin
     * [user_pass] => $P$Bfhjsy1yG/AjW9R8fx0/8B2EBtNT9A0
     * [user_nicename] => admin1111
     * [user_email] => shijie@tranhom.com
     * [user_url] => http://wordpress-test.kit.com
     * [user_registered] => 2022-11-29 02:50:48
     * [user_activation_key] =>
     * [user_status] => 0
     * [display_name] => admin
     * )
     */
    /**
     * Core class used to implement the WP_User object.
     *
     * @since 2.0.0
     *
     * @property string $nickname
     * @property string $description
     * @property string $user_description
     * @property string $first_name
     * @property string $user_firstname
     * @property string $last_name
     * @property string $user_lastname
     * @property string $user_login
     * @property string $user_pass
     * @property string $user_nicename
     * @property string $user_email
     * @property string $user_url
     * @property string $user_registered
     * @property string $user_activation_key
     * @property string $user_status
     * @property int    $user_level
     * @property string $display_name
     * @property string $spam
     * @property string $deleted
     * @property string $locale
     * @property string $rich_editing
     * @property string $syntax_highlighting
     * @property string $use_ssl
     */

    private int    $id;
    private string $userLogin;
    private string $userPass;
    private string $userNicename;
    private string $userEmail;
    private string $userUrl;
    private string $userRegistered;
    private string $userActivationKey;
    private int    $userStatus;
    private string $displayName;
    private string $authorPostsUrl;
    // Ext.....
    private string $description;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AuthorDto
     */
    public function setId(int $id) : AuthorDto
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserLogin() : string
    {
        return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return AuthorDto
     */
    public function setUserLogin(string $userLogin) : AuthorDto
    {
        $this->userLogin = $userLogin;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserPass() : string
    {
        return $this->userPass;
    }

    /**
     * @param string $userPass
     * @return AuthorDto
     */
    public function setUserPass(string $userPass) : AuthorDto
    {
        $this->userPass = $userPass;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserNicename() : string
    {
        return $this->userNicename;
    }

    /**
     * @param string $userNicename
     * @return AuthorDto
     */
    public function setUserNicename(string $userNicename) : AuthorDto
    {
        $this->userNicename = $userNicename;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail() : string
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return AuthorDto
     */
    public function setUserEmail(string $userEmail) : AuthorDto
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserUrl() : string
    {
        return $this->userUrl;
    }

    /**
     * @param string $userUrl
     * @return AuthorDto
     */
    public function setUserUrl(string $userUrl) : AuthorDto
    {
        $this->userUrl = $userUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserRegistered() : string
    {
        return $this->userRegistered;
    }

    /**
     * @param string $userRegistered
     * @return AuthorDto
     */
    public function setUserRegistered(string $userRegistered) : AuthorDto
    {
        $this->userRegistered = $userRegistered;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserActivationKey() : string
    {
        return $this->userActivationKey;
    }

    /**
     * @param string $userActivationKey
     * @return AuthorDto
     */
    public function setUserActivationKey(string $userActivationKey) : AuthorDto
    {
        $this->userActivationKey = $userActivationKey;

        return $this;
    }

    /**
     * @return int
     */
    public function getUserStatus() : int
    {
        return $this->userStatus;
    }

    /**
     * @param int $userStatus
     * @return AuthorDto
     */
    public function setUserStatus(int $userStatus) : AuthorDto
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName() : string
    {
        return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return AuthorDto
     */
    public function setDisplayName(string $displayName) : AuthorDto
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorPostsUrl() : string
    {
        return $this->authorPostsUrl;
    }

    /**
     * @param string $authorPostsUrl
     * @return AuthorDto
     */
    public function setAuthorPostsUrl(string $authorPostsUrl) : AuthorDto
    {
        $this->authorPostsUrl = $authorPostsUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return AuthorDto
     */
    public function setDescription(string $description) : AuthorDto
    {
        $this->description = $description;

        return $this;
    }

}
