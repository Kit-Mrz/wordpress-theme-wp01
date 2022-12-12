<?php

namespace Theme\Boot\Http\Repository;

use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Util\ConvertUtil;
use Theme\Boot\Http\Util\Singleton;
use WP_Query;

class PostRepository
{
    use Singleton;

    /**
     * @desc
     * @param array $postIns
     * @return PostDto[]
     */
    public function queryPosts(array $postIns) : array
    {
        $result = [];

        // 查询参数
        $params = [
            'post_type'           => 'post',
            'post__in'            => $postIns,
            'ignore_sticky_posts' => true,
            'nopaging'            => true,
        ];

        // 实例化查询对象
        $myQuery = new WP_Query($params);

        if ($myQuery->have_posts()) {
            while ($myQuery->have_posts()) {
                //
                $myQuery->the_post();
                /** @var \WP_Post $post */
                global $post;

                $dto = ConvertUtil::convertPostDto($post);

                $result[] = $dto;
            }
        }

        wp_reset_postdata();

        return $result;
    }

    /**
     * @desc
     * @param array $inputParams
     * @return PostDto[]
     */
    public function queryPostSlipPage(array $inputParams = []) : array
    {
        $result = [];

        // 查询参数
        $params = [
            'post_type'           => 'post',
            // 忽略置顶内容
            'ignore_sticky_posts' => true,
        ];

        // 实例化查询对象
        $myQuery = new WP_Query($params);

        $GLOBALS['wp_query'] = $myQuery;

        //print_r($myQuery->max_num_pages);
        //print_r($myQuery->query_vars['posts_per_page']);

        $defaults = array(
            'aria_current'       => 'page',
            'show_all'           => false,
            'prev_next'          => true,
            'prev_text'          => '', //__( '&laquo; Previous' ),
            'next_text'          => '', //__( 'Next &raquo;' ),
            'end_size'           => 1,
            'mid_size'           => 2,
            'type'               => 'plain',
            'add_args'           => array(), // Array of query args to add.
            'add_fragment'       => '',
            'before_page_number' => '',
            'after_page_number'  => '',
        );

        $paginateLinks = paginate_links($defaults);

        if ($myQuery->have_posts()) {
            while ($myQuery->have_posts()) {
                //
                $myQuery->the_post();
                /** @var \WP_Post $post */
                global $post;

                $dto = ConvertUtil::convertPostDto($post);

                $result[] = $dto;
            }
        }

        wp_reset_postdata();

        return $result;
    }

    /**
     * @desc 查询有特色图像的文章
     * @return PostDto[]
     */
    public function queryThumbnailPosts()
    {
        $dto = [];

        // 查询参数
        $params = [
//            'post_type' => 'post',
'ignore_sticky_posts' => true,
'meta_query'          => [
    [
        'posts_per_page' => 6,
        'key'            => '_thumbnail_id',
        'compare'        => 'EXISTS'
    ],
],
        ];

        // 实例化查询对象
        $myQuery = new WP_Query($params);

        if ($myQuery->have_posts()) {
            while ($myQuery->have_posts()) {
                //
                $myQuery->the_post();
                /** @var \WP_Post $post */
                global $post;

                $dto[] = ConvertUtil::convertPostDto($post);
            }
        }

        wp_reset_postdata();

        return $dto;
    }

    /**
     * @desc
     * @return PostDto[]
     */
    public function queryRecentPost()
    {
        $dto = [];

        $params = [
            'post_type'      => 'post',
            'posts_per_page' => 4,
            'ignore_sticky_posts' => true,
            'orderby'        => 'date',
            'order'          => 'DESC',
        ];

        // 实例化查询对象
        $myQuery = new WP_Query($params);

        if ($myQuery->have_posts()) {
            while ($myQuery->have_posts()) {
                //
                $myQuery->the_post();
                /** @var \WP_Post $post */
                global $post;

                $dto[] = ConvertUtil::convertPostDto($post);
            }
        }

        wp_reset_postdata();

        return $dto;
    }
}
