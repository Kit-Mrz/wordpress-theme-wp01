<?php

namespace Wp01\Inc\Ext;

class PostView
{
    private int    $postId;
    private string $field;

    public function __construct(int $postId)
    {
        $this->postId = $postId;
        $this->field  = '_wp01_post_view';
    }

    // 设置文章/页面 浏览次数
    public function setPostView() : bool
    {
        $postId = $this->postId;
        $field  = $this->field;

        // 详情页才处理
        if ( !is_singular()) {
            return false;
        }

        if (1 > $postId) {
            return false;
        }

        // 文章ID, 栏目字段名(隐藏值), 仅获取值
        $postView = get_post_meta($postId, $field, true);
        $postView = empty($postView) ? 0 : $postView;
        $postView++;

        // 更新
        return update_post_meta($postId, $field, $postView);
    }

    // 获取文章/页面 浏览次数
    public function getPostView() : int
    {
        $postId = $this->postId;
        $field  = $this->field;

        if ( !is_singular()) {
            return -1;
        }

        if (1 > $postId) {
            return -1;
        }

        $postView = get_post_meta($postId, $field, true);
        $postView = empty($postView) ? 0 : (int) ($postView);

        return $postView;
    }
}
