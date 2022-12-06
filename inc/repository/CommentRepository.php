<?php

namespace Wp01\Inc\Repository;

use Wp01\Inc\Dto\CommentDto;
use Wp01\Inc\Util\ConvertUtil;
use Wp01\Inc\Util\Singleton;

class CommentRepository
{
    use Singleton;

    /**
     * @desc
     * @param int $postId
     * @return CommentDto[]
     */
    public function queryPostComment(int $postId)
    {
        $params = [
            'post_id' => $postId,
            'orderby' => 'comment_date_gmt',
            //            'fields'  => 'comment_ID,comment_post_ID,comment_author,comment_author_email,comment_date,comment_content',
            'order'   => 'ASC',
            //    'status'  => 'approve',
            //    'meta_query' => [
            //        'relation' => 'AND',
            //        [
            //            'key' => 'featured',
            //            'value' => '1'
            //        ],
            //        [
            //            'key' => 'buried',
            //            'value' => '1',
            //            'type' => 'numeric',
            //            'compare' => '!='
            //        ],
            //    ],
        ];

        //$comments = get_comments( $commentArgs );
        $commentQuery = new \WP_Comment_Query();

        $comments = $commentQuery->query($params);

        $list = [];

        /** @var \WP_Comment $item */
        foreach ((array) $comments as $item) {
            $dto    = ConvertUtil::convertCommentDto($item);
            $list[] = $dto;
        }

        return $list;
    }
}
