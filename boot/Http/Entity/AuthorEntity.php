<?php

namespace Theme\Boot\Http\Entity;

use WP_User;

class AuthorEntity
{
    private ?int    $id;
    private ?string $userLogin;
    private ?string $userPass;
    private ?string $userNicename;
    private ?string $userEmail;
    private ?string $userUrl;
    private ?string $userRegistered;
    private ?string $userActivationKey;
    private ?int    $userStatus;
    private ?string $displayName;
    private ?string $authorPostsUrl;
    // Ext...
    private ?string $description;

    public function __construct(WP_User $user)
    {
        $this->setId($user->data->ID);
        $this->setUserLogin($user->data->user_login);
        $this->setUserPass($user->data->user_pass);
        $this->setUserNicename($user->data->user_nicename);
        $this->setUserEmail($user->data->user_email);
        $this->setUserUrl($user->data->user_url);
        $this->setUserRegistered($user->data->user_registered);
        $this->setUserActivationKey($user->data->user_activation_key);
        $this->setUserStatus($user->data->user_status);
        $this->setDisplayName($user->data->display_name);
        $this->setAuthorPostsUrl(get_author_posts_url($user->data->ID));
        $this->setDescription(get_user_meta($user->data->ID, 'description', true));
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
     */
    public function setId(?int $id) : void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getUserLogin() : ?string
    {
        return $this->userLogin;
    }

    /**
     * @param string|null $userLogin
     */
    public function setUserLogin(?string $userLogin) : void
    {
        $this->userLogin = $userLogin;
    }

    /**
     * @return string|null
     */
    public function getUserPass() : ?string
    {
        return $this->userPass;
    }

    /**
     * @param string|null $userPass
     */
    public function setUserPass(?string $userPass) : void
    {
        $this->userPass = $userPass;
    }

    /**
     * @return string|null
     */
    public function getUserNicename() : ?string
    {
        return $this->userNicename;
    }

    /**
     * @param string|null $userNicename
     */
    public function setUserNicename(?string $userNicename) : void
    {
        $this->userNicename = $userNicename;
    }

    /**
     * @return string|null
     */
    public function getUserEmail() : ?string
    {
        return $this->userEmail;
    }

    /**
     * @param string|null $userEmail
     */
    public function setUserEmail(?string $userEmail) : void
    {
        $this->userEmail = $userEmail;
    }

    /**
     * @return string|null
     */
    public function getUserUrl() : ?string
    {
        return $this->userUrl;
    }

    /**
     * @param string|null $userUrl
     */
    public function setUserUrl(?string $userUrl) : void
    {
        $this->userUrl = $userUrl;
    }

    /**
     * @return string|null
     */
    public function getUserRegistered() : ?string
    {
        return $this->userRegistered;
    }

    /**
     * @param string|null $userRegistered
     */
    public function setUserRegistered(?string $userRegistered) : void
    {
        $this->userRegistered = $userRegistered;
    }

    /**
     * @return string|null
     */
    public function getUserActivationKey() : ?string
    {
        return $this->userActivationKey;
    }

    /**
     * @param string|null $userActivationKey
     */
    public function setUserActivationKey(?string $userActivationKey) : void
    {
        $this->userActivationKey = $userActivationKey;
    }

    /**
     * @return int|null
     */
    public function getUserStatus() : ?int
    {
        return $this->userStatus;
    }

    /**
     * @param int|null $userStatus
     */
    public function setUserStatus(?int $userStatus) : void
    {
        $this->userStatus = $userStatus;
    }

    /**
     * @return string|null
     */
    public function getDisplayName() : ?string
    {
        return $this->displayName;
    }

    /**
     * @param string|null $displayName
     */
    public function setDisplayName(?string $displayName) : void
    {
        $this->displayName = $displayName;
    }

    /**
     * @return string|null
     */
    public function getAuthorPostsUrl() : ?string
    {
        return $this->authorPostsUrl;
    }

    /**
     * @param string|null $authorPostsUrl
     */
    public function setAuthorPostsUrl(?string $authorPostsUrl) : void
    {
        $this->authorPostsUrl = $authorPostsUrl;
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }

}
