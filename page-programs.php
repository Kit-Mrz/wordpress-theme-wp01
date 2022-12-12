<?php

?>
<?php get_header(); ?>
<main>
    <!-- Hero area Start-->
    <?php
    /** @see HeroArea */
    get_template_part('inc/part/HeroArea', null, ['id' => get_queried_object_id()]);
    ?>
    <!--  Hero area End -->
    <!--? Blog Ara S t a r t -->
    <?php
    /** @see ProgramsOffer */
    get_template_part('inc/part/ProgramsOffer', null, ["postIds" =>  [1872, 1877, 1870] ]);
    ?>
    <!-- Services Ara E n d -->
    <!--? Visit o n e -->
    <?php
    /** @see TrustedStudents */
    get_template_part('inc/part/TrustedStudents', null, ["postIds" =>  [1872] ]);
    ?>
    <!-- Visit Our Tailor E n d -->
</main>
<?php get_footer(); ?>
