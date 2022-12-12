<?php
namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Util\Singleton;

class OurPartners
{
    use Singleton;

    public function __construct()
    {
        $this->themeFileUri = get_theme_file_uri();
    }

    /**
     * @return string
     */
    public function getThemeFileUri() : string
    {
        return $this->themeFileUri;
    }

    /**
     * @desc OUR PARTNERS
     */
    public function getOurPartners() : array
    {
        return [
            [
                'title'   => 'OUR PARTNERS',
                'excerpt' => 'Maecenas felis felis, vulputate sit amet mauris et, semper aliquam ligula. Integer efficitur tellus metus, sed feugiat leo posuere.',
                'banners' => [
                    [
                        'permalink' => $this->getThemeFileUri() . '/assets/img/gallery/brand1.png',
                    ],
                    [
                        'permalink' => $this->getThemeFileUri() . '/assets/img/gallery/brand2.png',
                    ],
                    [
                        'permalink' => $this->getThemeFileUri() . '/assets/img/gallery/brand3.png',
                    ],
                    [
                        'permalink' => $this->getThemeFileUri() . '/assets/img/gallery/brand2.png',
                    ],
                    [
                        'permalink' => $this->getThemeFileUri() . '/assets/img/gallery/brand1.png',
                    ],
                    [
                        'permalink' => $this->getThemeFileUri() . '/assets/img/gallery/brand2.png',
                    ],
                    [
                        'permalink' => $this->getThemeFileUri() . '/assets/img/gallery/brand1.png',
                    ],
                ],
            ]
        ];
    }

}

$ourPartners = new OurPartners();

?>
<section class="brand-area section-padding">
    <?php foreach (OurPartners::getInstance()->getOurPartners() as $item): ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-60">
                        <h2><?= $item['title']; ?></h2>
                        <p><?= $item['excerpt']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-end">
                <div class="col-xl-8 col-lg-9">
                    <div class="brand-active text-center">
                        <?php foreach ($item['banners'] as $bannerItem): ?>
                            <div class="single-brand">
                                <img src="<?= $bannerItem['permalink']; ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>
