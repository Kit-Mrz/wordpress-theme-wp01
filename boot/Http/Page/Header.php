<?php

namespace Theme\Boot\Http\Page;

use Theme\Boot\Http\Util\NavMenu;
use Theme\Boot\Http\Util\Singleton;

class Header
{
    use Singleton;

    // 导航菜单
    public static function menuNav()
    {
        $defaults = [
            'menu'                 => '',
            // 包裹的标签
            'container'            => 'nav',
            // 包裹标签的 class，
            // 默认格式为 menu-xxx-container, xxx 是后台设置的菜单名称
            'container_class'      => '',
            // 包裹标签的 id
            'container_id'         => '',
            'container_aria_label' => '',
            // 菜单默认由 ul 标签包裹
            // 菜单项目列表本身的 calss 标签属性
            'menu_class'           => 'menu',
            // 菜单项目列表本身的 id 标签属性
            'menu_id'              => '',
            // 是否要输出,为 false 时可以使用变量接收
            'echo'                 => true,
            // 当没有设置过菜单项目时，直接获取页面的信息当做菜单项目
            'fallback_cb'          => 'wp_page_menu',
            // 在菜单项目对应的超连接前面添加前缀，如: <span class="sp-class">
            'before'               => '',
            // 在菜单项目对应的超连接后面添加后缀，如: </span>
            'after'                => '',
            // 在菜单项目对应的超链接前面添加前缀
            'link_before'          => '',
            // 在菜单项目对应的超链接前面添加后缀
            'link_after'           => '',
            // 默认使用的结构，可以自定义 id, class, 内容文本等
            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            //
            'item_spacing'         => 'preserve',
            // 菜单层级深度, 0 表示所有层级，大于 0 表示显式对应的层级数
            'depth'                => 0,
            'walker'               => new NavMenu(),
            // 调用由 register_nav_menus 注册的菜单，如 nav-1
            'theme_location'       => 'nav-1',
        ];

        wp_nav_menu($defaults);
    }
}
