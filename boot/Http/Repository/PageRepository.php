<?php

namespace Theme\Boot\Http\Repository;

use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Util\ConvertUtil;
use Theme\Boot\Http\Util\Singleton;

class PageRepository
{
    use Singleton;

    /**
     * @desc
     * @param int $pageId
     * @return PostDto
     */
    public function queryPage(int $pageId) : ?PostDto
    {
        $dto = null;

        // 查询参数
        $params = [
            'post_type' => 'page',
            'page_id'   => $pageId,
        ];

        // 实例化查询对象
        $myQuery = new \WP_Query($params);

        if ($myQuery->have_posts()) {
            while ($myQuery->have_posts()) {
                //
                $myQuery->the_post();
                /** @var \WP_Post $post */
                global $post;

                $dto = ConvertUtil::convertPostDto($post);
            }
        }

        wp_reset_postdata();

        return $dto;
    }

}
