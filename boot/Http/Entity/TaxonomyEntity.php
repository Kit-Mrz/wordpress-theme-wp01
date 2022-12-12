<?php

namespace Theme\Boot\Http\Entity;

use WP_Term;

class TaxonomyEntity
{
    private ?int    $termId;
    private ?string $name;
    private ?string $slug;
    private ?int    $termGroup;
    private ?int    $termTaxonomy;
    private ?int    $termTaxonomyId;
    private ?string $taxonomy;
    private ?string $description;
    private ?int    $parent;
    private ?int    $count;
    private ?string $filter;

    public function __construct(WP_Term $term)
    {
        $this->setTermId($term->term_id);
        $this->setName($term->name);
        $this->setSlug($term->slug);
        $this->setTermGroup($term->term_group);
        $this->setTermTaxonomyId($term->term_taxonomy_id);
        $this->setTaxonomy($term->taxonomy);
        $this->setDescription($term->description);
        $this->setParent($term->parent);
        $this->setCount($term->count);
        $this->setFilter($term->filter);
    }

    /**
     * @return int|null
     */
    public function getTermId() : ?int
    {
        return $this->termId;
    }

    /**
     * @param int|null $termId
     */
    public function setTermId(?int $termId) : void
    {
        $this->termId = $termId;
    }

    /**
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name) : void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getSlug() : ?string
    {
        return $this->slug;
    }

    /**
     * @param string|null $slug
     */
    public function setSlug(?string $slug) : void
    {
        $this->slug = $slug;
    }

    /**
     * @return int|null
     */
    public function getTermGroup() : ?int
    {
        return $this->termGroup;
    }

    /**
     * @param int|null $termGroup
     */
    public function setTermGroup(?int $termGroup) : void
    {
        $this->termGroup = $termGroup;
    }

    /**
     * @return int|null
     */
    public function getTermTaxonomy() : ?int
    {
        return $this->termTaxonomy;
    }

    /**
     * @param int|null $termTaxonomy
     */
    public function setTermTaxonomy(?int $termTaxonomy) : void
    {
        $this->termTaxonomy = $termTaxonomy;
    }

    /**
     * @return int|null
     */
    public function getTermTaxonomyId() : ?int
    {
        return $this->termTaxonomyId;
    }

    /**
     * @param int|null $termTaxonomyId
     */
    public function setTermTaxonomyId(?int $termTaxonomyId) : void
    {
        $this->termTaxonomyId = $termTaxonomyId;
    }

    /**
     * @return string|null
     */
    public function getTaxonomy() : ?string
    {
        return $this->taxonomy;
    }

    /**
     * @param string|null $taxonomy
     */
    public function setTaxonomy(?string $taxonomy) : void
    {
        $this->taxonomy = $taxonomy;
    }

    /**
     * @return string|null
     */
    public function getDescription() : ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description) : void
    {
        $this->description = $description;
    }

    /**
     * @return int|null
     */
    public function getParent() : ?int
    {
        return $this->parent;
    }

    /**
     * @param int|null $parent
     */
    public function setParent(?int $parent) : void
    {
        $this->parent = $parent;
    }

    /**
     * @return int|null
     */
    public function getCount() : ?int
    {
        return $this->count;
    }

    /**
     * @param int|null $count
     */
    public function setCount(?int $count) : void
    {
        $this->count = $count;
    }

    /**
     * @return string|null
     */
    public function getFilter() : ?string
    {
        return $this->filter;
    }

    /**
     * @param string|null $filter
     */
    public function setFilter(?string $filter) : void
    {
        $this->filter = $filter;
    }

}
