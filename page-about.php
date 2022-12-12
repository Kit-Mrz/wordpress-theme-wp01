<?php

$id = get_queried_object_id();
$comprehensiveTeachingApproachIds = [1];
$essentialResourcesIds = [1, 139];
$topStoriesIds = [1, 139];
$trustedStudentsIds = [139];

?>

<?php get_header() ?>
<main>
    <!-- Hero area Start-->
    <?php
    /** @see HeroArea */
    get_template_part('boot/Http/Part/HeroArea', null, ['id' => $id]);
    ?>
    <!--  Hero area End -->
    <!--? About Area  01-->
    <?php
    /** @see ComprehensiveTeachingApproach */
    get_template_part('boot/Http/Part/ComprehensiveTeachingApproach', null, ["postIds" => $comprehensiveTeachingApproachIds]);
    ?>
    <!-- About Area E n d -->
    <!--? Visit Our t h r e e -->
    <?php
    /** @see EssentialResources */
    get_template_part('boot/Http/Part/EssentialResources', null, ["postIds" => $essentialResourcesIds ]);
    ?>
    <!-- Visit Our Tailor E n d -->
    <!--? Class-offer-area S t a r t -->
    <?php
    /** @see TopStories */
    get_template_part('boot/Http/Part/TopStories', null, ['postIds' => $topStoriesIds]);
    ?>
    <!-- Class-offer-area E n d -->
    <!--? Brand Area S t a r t -->
    <?php
    /** @see OurPartners */
    get_template_part('boot/Http/Part/OurPartners');
    ?>
    <!-- Brand Area E n d -->
    <!--? Visit o n e -->
    <?php
    /** @see TrustedStudents */
    get_template_part('boot/Http/Part/TrustedStudents', null, ['postIds' => $trustedStudentsIds]);
    ?>
    <!-- Visit Our Tailor E n d -->
</main>
<?php get_footer() ?>
