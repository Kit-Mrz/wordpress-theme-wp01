<?php

class PagePrograms
{

    private int $id;

    private array $programsOfferIds;

    private array $trustedStudentsIds;

    public function __construct(array $params)
    {
        $this->id = (int) ($params['id'] ?? -1);

        $programOffer = get_post_meta($this->id, 'programs-offer', true);

        if ( !empty($programOffer)) {
            $this->programsOfferIds = explode(',', $programOffer);
        } else {
            $this->programsOfferIds = [];
        }

        $trustedStudents = get_post_meta($this->id, 'trusted-students', true);
        if ( !empty($trustedStudents)) {
            $this->trustedStudentsIds = explode(',', $trustedStudents);
        } else {
            $this->trustedStudentsIds = [];
        }
    }

    public function getProgramsOfferIds() : array
    {
        return $this->programsOfferIds;
    }

    public function getTrustedStudentsIds() : array
    {
        return $this->trustedStudentsIds;
    }
}

$qoId = get_queried_object_id();

$pagePrograms = new PagePrograms(['id' => $qoId]);

$programsOfferIds = $pagePrograms->getProgramsOfferIds();

$trustedStudentsIds = $pagePrograms->getTrustedStudentsIds();

?>
<?php get_header(); ?>
<main>
    <!-- Hero area Start-->
    <?php
    /** @see HeroArea */
    get_template_part('boot/Http/Part/HeroArea', null, ['id' => $qoId]);
    ?>
    <!--  Hero area End -->
    <!--? Blog Ara S t a r t -->
    <?php
    //    if ( !empty($programsOfferIds)) {
    //        /** @see ProgramsOffer */
    //        get_template_part('boot/Http/Part/ProgramsOffer', null, ["postIds" => $programsOfferIds]);
    //    }

    if ( !empty($programsOfferIds)) {
        /** @see ProgramsOfferCustom */
        get_template_part('boot/Http/Part/ProgramsOfferCustom', null, ["postIds" => $programsOfferIds]);
    }
    ?>
    <!-- Services Ara E n d -->
    <!--? Visit o n e -->
    <?php
    if ( !empty($trustedStudentsIds)) {
        /** @see TrustedStudentsCustom */
        get_template_part('boot/Http/Part/TrustedStudentsCustom', null, ["postIds" => $trustedStudentsIds]);
    }
    ?>
    <!-- Visit Our Tailor E n d -->
</main>
<?php get_footer(); ?>
