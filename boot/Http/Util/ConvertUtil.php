<?php

namespace Theme\Boot\Http\Util;

use Theme\Boot\Http\Dto\AuthorDto;
use Theme\Boot\Http\Dto\CommentDto;
use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Dto\TaxonomyDto;
use WP_Comment;
use WP_Post;
use WP_Term;
use WP_User;

class ConvertUtil
{
    /**
     * @desc
     * @param WP_User $user
     * @return AuthorDto
     */
    public static function convertAuthorDto(WP_User $user) : AuthorDto
    {
        $dto = new AuthorDto();

        $dto->setId($user->data->ID);
        $dto->setUserLogin($user->data->user_login);
        $dto->setUserPass($user->data->user_pass);
        $dto->setUserNicename($user->data->user_nicename);
        $dto->setUserEmail($user->data->user_email);
        $dto->setUserUrl($user->data->user_url);
        $dto->setUserRegistered($user->data->user_registered);
        $dto->setUserActivationKey($user->data->user_activation_key);
        $dto->setUserStatus($user->data->user_status);
        $dto->setDisplayName($user->data->display_name);
        $dto->setAuthorPostsUrl(get_author_posts_url($user->data->ID));
        $dto->setDescription(get_user_meta($user->data->ID, 'description', true));

        return $dto;
    }

    /**
     * @desc Post, Page
     * @param WP_Post $post
     * @return PostDto
     */
    public static function convertPostDto(WP_Post $post) : PostDto
    {
        $dto = new PostDto();

        $dto->setId($post->ID);
        $dto->setPostAuthor($post->post_author);
        $dto->setPostDate($post->post_date);
        $dto->setPostDateGmt($post->post_date_gmt);
        $dto->setPostContent($post->post_content);
        $dto->setPostTitle($post->post_title);
        $dto->setPostExcerpt($post->post_excerpt);
        $dto->setPostStatus($post->post_status);
        $dto->setCommentStatus($post->comment_status);
        $dto->setPingStatus($post->ping_status);
        $dto->setPostPassword($post->post_password);
        $dto->setPostName($post->post_name);
        $dto->setToPing($post->to_ping);
        $dto->setPinged($post->pinged);
        $dto->setPostModified($post->post_modified);
        $dto->setPostModifiedGmt($post->post_modified_gmt);
        $dto->setPostContentFiltered($post->post_content_filtered);
        $dto->setPostParent($post->post_parent);
        $dto->setGuid($post->guid);
        $dto->setMenuOrder($post->menu_order);
        $dto->setPostType($post->post_type);
        $dto->setPostMimeType($post->post_mime_type);
        $dto->setCommentCount($post->comment_count);
        $dto->setFilter($post->filter);

        // Ext *****
        $dto->setPostThumbnailSmall(get_the_post_thumbnail_url($post, 'thumbnail'));
        $dto->setPostThumbnailMedium(get_the_post_thumbnail_url($post, 'medium'));
        $dto->setPostThumbnailLarge(get_the_post_thumbnail_url($post, 'large'));
        $dto->setPostThumbnailFull(get_the_post_thumbnail_url($post, 'full'));
        $dto->setPermalink(get_the_permalink($post));

        return $dto;
    }

    /**
     * @desc taxonomy
     * @param WP_Term $term
     * @return TaxonomyDto
     */
    public static function convertTaxonomyDto(WP_Term $term) : TaxonomyDto
    {
        $dto = new TaxonomyDto();

        $dto->setTermId($term->term_id);
        $dto->setName($term->name);
        $dto->setSlug($term->slug);
        $dto->setTermGroup($term->term_group);
        $dto->setTermTaxonomyId($term->term_taxonomy_id);
        $dto->setTaxonomy($term->taxonomy);
        $dto->setDescription($term->description);
        $dto->setParent($term->parent);
        $dto->setCount($term->count);
        $dto->setFilter($term->filter);

        return $dto;
    }

    /**
     * @desc Comment
     * @param WP_Comment $comment
     * @return CommentDto
     */
    public static function convertCommentDto(WP_Comment $comment) : CommentDto
    {
        $dto = new CommentDto();

        $dto->setCommentId($comment->comment_ID);
        $dto->setCommentPostId($comment->comment_post_ID);
        $dto->setCommentAuthor($comment->comment_author);
        $dto->setCommentAuthorEmail($comment->comment_author_email);
        $dto->setCommentAuthorUrl($comment->comment_author_url);
        $dto->setCommentAuthorIp($comment->comment_author_IP);
        $dto->setCommentDate($comment->comment_date);
        $dto->setCommentDateGmt($comment->comment_date_gmt);
        $dto->setCommentContent($comment->comment_content);
        $dto->setCommentKarma($comment->comment_karma);
        $dto->setCommentApproved($comment->comment_approved);
        $dto->setCommentAgent($comment->comment_agent);
        $dto->setCommentType($comment->comment_type);
        $dto->setCommentParent($comment->comment_parent);
        $dto->setUserId($comment->user_id);
        $dto->setChildren($comment->get_children());

        return $dto;
    }
}
