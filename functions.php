<?php

require str_replace('\\', DIRECTORY_SEPARATOR, __DIR__) . '/boot/vendor/autoload.php';

use Theme\Boot\Http\Util\GeneralUtil;

class Functions
{
    public function __construct()
    {
        // 样式、脚本加载
        add_action('wp_enqueue_scripts', [$this, 'wpEnqueueScripts']);
        // 用于开启某些功能
        add_action('after_setup_theme', [$this, 'afterSetupTheme']);
        // 使用特色图片功能
        add_action('after_setup_theme', [$this, 'postThumbnails']);
        // 修改钩子，修改子菜单的类
        add_filter('nav_menu_submenu_css_class', [$this, 'navMenuSubmenuCssClass']);
        // 注册边栏
        add_action('widgets_init', [$this, 'registerSidebar']);
    }

    // Hook: wp_enqueue_scripts
    public function wpEnqueueScripts()
    {
        $themeFileUri = GeneralUtil::getInstance()->getThemeFileUri() . '/';

        /*  CSS here  */
        wp_enqueue_style('bootstrap.min.css', $themeFileUri . 'assets/css/bootstrap.min.css');
        wp_enqueue_style('owl.carousel.min.css', $themeFileUri . 'assets/css/owl.carousel.min.css');
        wp_enqueue_style('slicknav.css', $themeFileUri . 'assets/css/slicknav.css');
        wp_enqueue_style('animate.min.css', $themeFileUri . 'assets/css/animate.min.css');

        wp_enqueue_style('magnific-popup.css', $themeFileUri . 'assets/css/magnific-popup.css');
        wp_enqueue_style('fontawesome-all.min.css', $themeFileUri . 'assets/css/fontawesome-all.min.css');
        wp_enqueue_style('themify-icons.css', $themeFileUri . 'assets/css/themify-icons.css');
        wp_enqueue_style('slick.css', $themeFileUri . 'assets/css/slick.css');
        wp_enqueue_style('nice-select.css', $themeFileUri . 'assets/css/nice-select.css');
        wp_enqueue_style('style.css', $themeFileUri . 'assets/css/style.css');

        /*  JS here  */
        /*  Jquery, Popper, Bootstrap  */
        wp_enqueue_script('modernizr-3.5.0.min.js', $themeFileUri . 'assets/js/vendor/modernizr-3.5.0.min.js', [], false, true);
        wp_enqueue_script('jquery-1.12.4.min.js', $themeFileUri . 'assets/js/vendor/jquery-1.12.4.min.js', [], false, true);
        wp_enqueue_script('popper.min.js', $themeFileUri . 'assets/js/popper.min.js', [], false, true);
        wp_enqueue_script('bootstrap.min.js', $themeFileUri . 'assets/js/bootstrap.min.js', [], false, true);

        /*  Slick-slider , Owl-Carousel ,slick-nav , Counter */
        wp_enqueue_script('owl.carousel.min.js', $themeFileUri . 'assets/js/owl.carousel.min.js', [], false, true);
        wp_enqueue_script('slick.min.js', $themeFileUri . 'assets/js/slick.min.js', [], false, true);
        wp_enqueue_script('jquery.slicknav.min.js', $themeFileUri . 'assets/js/jquery.slicknav.min.js', [], false, true);
        wp_enqueue_script('countdown.min.js', $themeFileUri . 'assets/js/countdown.min.js', [], false, true);

        /* wow , counter , waypoint, Nice-select  */
        wp_enqueue_script('wow.min.js', $themeFileUri . 'assets/js/wow.min.js', [], false, true);
        wp_enqueue_script('jquery.magnific-popup.js', $themeFileUri . 'assets/js/jquery.magnific-popup.js', [], false, true);
        wp_enqueue_script('jquery.nice-select.min.js', $themeFileUri . 'assets/js/jquery.nice-select.min.js', [], false, true);
        wp_enqueue_script('jquery.counterup.min.js', $themeFileUri . 'assets/js/jquery.counterup.min.js', [], false, true);
        wp_enqueue_script('waypoints.min.js', $themeFileUri . 'assets/js/waypoints.min.js', [], false, true);

        /*  contact js  */
        wp_enqueue_script('contact.js', $themeFileUri . 'assets/js/contact.js', [], false, true);
        wp_enqueue_script('jquery.form.js', $themeFileUri . 'assets/js/jquery.form.js', [], false, true);
        wp_enqueue_script('jquery.validate.min.js', $themeFileUri . 'assets/js/jquery.validate.min.js', [], false, true);
        wp_enqueue_script('mail-script.js', $themeFileUri . 'assets/js/mail-script.js', [], false, true);
        wp_enqueue_script('jquery.ajaxchimp.min.js', $themeFileUri . 'assets/js/jquery.ajaxchimp.min.js', [], false, true);

        /*   Plugins, main-Jquery  */
        wp_enqueue_script('plugins.js', $themeFileUri . 'assets/js/plugins.js', [], false, true);
        wp_enqueue_script('main.js', $themeFileUri . 'assets/js/main.js', [], false, true);


        // 是否详情页 && 开启评论 & ???
        if (is_singular() && comments_open() && get_option('thread_comments')) {
            // 加载
            wp_enqueue_script('comment-reply');
        }
    }

    // Hook: after_setup_theme
    public function afterSetupTheme()
    {
        $locations = [
            // 菜单位置 => 菜单名称
            'nav-1' => '项部导航',
            // 'nav-2' => '底部导航',
        ];
        // 注册导航菜单
        register_nav_menus($locations);
    }

    // Hook: nav_menu_submenu_css_class
    public function navMenuSubmenuCssClass($param)
    {
        $param[0] = 'submenu';

        return $param;
    }

    // Hook: after_setup_theme
    public function postThumbnails()
    {
        // 使用特色图片功能
        add_theme_support('post-thumbnails');
    }

    // Hook: widgets_init
    public function registerSidebar()
    {
        $defaults = array(
            /* translators: %d: Sidebar number. */
            //            'name'           => sprintf( __( 'Sidebar %d' ), $i ),
            'id'             => "sidebar-1",
            'description'    => '',
            'class'          => 'single_sidebar_widget search_widget',
            'before_widget'  => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'   => "</aside>\n",
            'before_title'   => '<h3 class="widget-title">',
            'after_title'    => '</h3>',
            'before_sidebar' => '',
            'after_sidebar'  => '',
            'show_in_rest'   => false,

        );

        // 注册边栏
        register_sidebar($defaults);
    }

//    // 自动加载注册
//    private static function autoloadRegister()
//    {
//        spl_autoload_register([self::class, 'autoloadClass']);
//    }
//
//    // 自动加载器
//    private static function autoloadClass(string $className)
//    {
//        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
//
//        // 命名空间 Wp01/Inc
//        $namespacePrefix = __NAMESPACE__ . '/Inc';
//        //
//        if (strpos($className, $namespacePrefix) !== false) {
//            $tempName = str_replace('/', ' ', $className);
//
//            $tempName = ucfirst($tempName);
//
//            $tempName = str_replace(' ', '/', $tempName);
//
//            $tempName = str_replace(__NAMESPACE__, '', $tempName);
//
//            $classPath = get_theme_file_path() . "{$tempName}.php";
//
//            require $classPath;
//        }
//    }

    public static function main()
    {
//        self::autoloadRegister();
        new self();
    }
}

Functions::main();
