<?php

namespace Theme\Boot\Http\Part;

use Theme\Boot\Http\Dto\PostDto;
use Theme\Boot\Http\Repository\PageRepository;

class HeroArea
{
    private int $id;

    public function __construct(array $params)
    {
        $this->id = (int) $params['id'] ?? -1;
    }

    public function getQueriedObject() : ?PostDto
    {
        return PageRepository::getInstance()->queryPage($this->id);
    }
}

$heroArea = new HeroArea($args ?? []);

?>
<div class="slider-area">
    <div class="slider-height2 slider-bg2 hero-overly d-flex align-items-center">
        <?php if (($object = $heroArea->getQueriedObject()) != null) : ?>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-9">
                        <div class="hero-caption hero-caption2">
                            <h2><?= $object->getPostTitle() ?></h2>
                            <p><?= $object->getPostContent() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $heroArea = null; ?>
