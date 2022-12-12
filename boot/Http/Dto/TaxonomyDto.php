<?php

namespace Theme\Boot\Http\Dto;

/**
 * WP_Term Object
 * (
 * [term_id] => 2
 * [name] => aciform
 * [slug] => aciform
 * [term_group] => 0
 * [term_taxonomy_id] => 2
 * [taxonomy] => category
 * [description] =>
 * [parent] => 0
 * [count] => 1
 * [filter] => raw
 * )
 */
class TaxonomyDto
{
    private int    $termId;
    private string $name;
    private string $slug;
    private int    $termGroup;
    private int    $termTaxonomy;
    private int    $termTaxonomyId;
    private string $taxonomy;
    private string $description;
    private int    $parent;
    private int    $count;
    private string $filter;

    /**
     * @return int
     */
    public function getTermId() : int
    {
        return $this->termId;
    }

    /**
     * @param int $termId
     * @return TaxonomyDto
     */
    public function setTermId(int $termId) : TaxonomyDto
    {
        $this->termId = $termId;

        return $this;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return TaxonomyDto
     */
    public function setName(string $name) : TaxonomyDto
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getSlug() : string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     * @return TaxonomyDto
     */
    public function setSlug(string $slug) : TaxonomyDto
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return int
     */
    public function getTermGroup() : int
    {
        return $this->termGroup;
    }

    /**
     * @param int $termGroup
     * @return TaxonomyDto
     */
    public function setTermGroup(int $termGroup) : TaxonomyDto
    {
        $this->termGroup = $termGroup;

        return $this;
    }

    /**
     * @return int
     */
    public function getTermTaxonomy() : int
    {
        return $this->termTaxonomy;
    }

    /**
     * @param int $termTaxonomy
     * @return TaxonomyDto
     */
    public function setTermTaxonomy(int $termTaxonomy) : TaxonomyDto
    {
        $this->termTaxonomy = $termTaxonomy;

        return $this;
    }

    /**
     * @return int
     */
    public function getTermTaxonomyId() : int
    {
        return $this->termTaxonomyId;
    }

    /**
     * @param int $termTaxonomyId
     * @return TaxonomyDto
     */
    public function setTermTaxonomyId(int $termTaxonomyId) : TaxonomyDto
    {
        $this->termTaxonomyId = $termTaxonomyId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxonomy() : string
    {
        return $this->taxonomy;
    }

    /**
     * @param string $taxonomy
     * @return TaxonomyDto
     */
    public function setTaxonomy(string $taxonomy) : TaxonomyDto
    {
        $this->taxonomy = $taxonomy;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return TaxonomyDto
     */
    public function setDescription(string $description) : TaxonomyDto
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getParent() : int
    {
        return $this->parent;
    }

    /**
     * @param int $parent
     * @return TaxonomyDto
     */
    public function setParent(int $parent) : TaxonomyDto
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return int
     */
    public function getCount() : int
    {
        return $this->count;
    }

    /**
     * @param int $count
     * @return TaxonomyDto
     */
    public function setCount(int $count) : TaxonomyDto
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilter() : string
    {
        return $this->filter;
    }

    /**
     * @param string $filter
     * @return TaxonomyDto
     */
    public function setFilter(string $filter) : TaxonomyDto
    {
        $this->filter = $filter;

        return $this;
    }

}
