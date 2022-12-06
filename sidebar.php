<?php
namespace Wp01;

use Wp01\Inc\Page\Sidebar;
use Wp01\Inc\Part\InstagramFeeds;

$sidebar = new Sidebar();

?>
<div class="blog_right_sidebar">

    <?php !is_dynamic_sidebar() and dynamic_sidebar('sidebar-1'); ?>

    <aside class="single_sidebar_widget search_widget">
        <form action="<?= home_url('/'); ?>">
            <div class="form-group m-0">
                <div class="input-group">
                    <input name="s" type="text" class="form-control" placeholder="Search Keyword">
                    <div class="input-group-append d-flex">
                        <button class="boxed-btn2" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
    </aside>

    <?php
    /** @see Category */
    get_template_part('inc/part/Category', null, ['id' => get_queried_object_id()]);
    ?>

    <?php
    /** @see RecentPost */
    get_template_part('inc/part/RecentPost', null, ['id' => get_queried_object_id()]);
    ?>

    <?php
    /** @see TagClouds */
    get_template_part('inc/part/TagClouds', null, ['id' => get_queried_object_id()]);
    ?>

    <?php
    /** @see InstagramFeeds */
    get_template_part('inc/part/InstagramFeeds', null, ['id' => get_queried_object_id()]);
    ?>

    <aside class="single_sidebar_widget newsletter_widget">
        <h4 class="widget_title" style="color: #2d2d2d;">Newsletter</h4>
        <form action="#">
            <div class="form-group">
                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
            </div>
            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Subscribe
            </button>
        </form>
    </aside>

</div>
