<?php

namespace Theme\Boot\Http\Repository;

use Theme\Boot\Http\Dto\TaxonomyDto;
use Theme\Boot\Http\Util\ConvertUtil;
use Theme\Boot\Http\Util\Singleton;

class TermRepository
{
    use Singleton;

    /**
     * @desc
     * @param array $params
     * @return TaxonomyDto[]
     */
    public function queryCategories(array $params = [])
    {
        $result = [];

        $the_query = new \WP_Term_Query($params);

        foreach ($the_query->get_terms() as $term) {
            //
            $dto = ConvertUtil::convertTaxonomyDto($term);

            $result[] = $dto;
        }

        wp_reset_postdata();

        return $result;
    }

    /**
     * @desc
     * @param array $params
     * @return TaxonomyDto[]
     */
    public function queryPostTag(array $params = [])
    {
        $result = [];

        $the_query = new \WP_Term_Query($params);

        foreach ($the_query->get_terms() as $term) {
            //
            $dto = ConvertUtil::convertTaxonomyDto($term);

            $result[] = $dto;
        }

        wp_reset_postdata();

        return $result;
    }
}
