<?php
namespace Wp01;

use Wp01\Inc\Page\PageAbout;

$pageAbout = new PageAbout();

?>

<?php get_header() ?>
<main>
    <!-- Hero area Start-->
    <?php
    /** @see HeroArea */
    get_template_part('inc/part/HeroArea', null, ['id' => get_queried_object_id()]);
    ?>
    <!--  Hero area End -->
    <!--? About Area  01-->
    <?php
    /** @see ComprehensiveTeachingApproach */
    get_template_part('inc/part/ComprehensiveTeachingApproach', null, ["postIds" => [1889]]);
    ?>
    <!-- About Area E n d -->
    <!--? Visit Our t h r e e -->
    <?php
    /** @see EssentialResources */
    get_template_part('inc/part/EssentialResources', null, ["postIds" => [1870, 1872, 1877]]);
    ?>
    <!-- Visit Our Tailor E n d -->
    <!--? Class-offer-area S t a r t -->
    <?php
    /** @see TopStories */
    get_template_part('inc/part/TopStories', null, ['postIds' => [1870, 1872, 1877]]);
    ?>
    <!-- Class-offer-area E n d -->
    <!--? Brand Area S t a r t -->
    <?php
    /** @see OurPartners */
    get_template_part('inc/part/OurPartners');
    ?>
    <!-- Brand Area E n d -->
    <!--? Visit o n e -->
    <?php
    /** @see TrustedStudents */
    get_template_part('inc/part/TrustedStudents', null, ['postIds' => [1872]]);
    ?>
    <!-- Visit Our Tailor E n d -->
</main>
<?php get_footer() ?>
<?php $pageAbout = null; ?>
