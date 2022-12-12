<?php

$programTitle = get_post_meta(get_queried_object_id(), 'program_title', true);
dump($programTitle);
$programSlug = get_post_meta(get_queried_object_id(), 'program_slug', true);
dump($programSlug);
$programContent = get_post_meta(get_queried_object_id(), 'program_content', true);
dump($programContent);
dd(get_queried_object());

?>
<?php get_header(); ?>
<main>
    <!-- Hero area Start-->
    <?php
    /** @see HeroArea */
    get_template_part('boot/Http/Part/HeroArea', null, ['id' => get_queried_object_id()]);
    ?>
    <!--  Hero area End -->
    <!--? Blog Ara S t a r t -->
    <?php
    /** @see ProgramsOffer */
    get_template_part('boot/Http/Part/ProgramsOffer', null, ["postIds" =>  [1, 2611, 139] ]);
    ?>
    <!-- Services Ara E n d -->
    <!--? Visit o n e -->
    <?php
    /** @see TrustedStudents */
    get_template_part('boot/Http/Part/TrustedStudents', null, ["postIds" =>  [1] ]);
    ?>
    <!-- Visit Our Tailor E n d -->
</main>
<?php get_footer(); ?>
