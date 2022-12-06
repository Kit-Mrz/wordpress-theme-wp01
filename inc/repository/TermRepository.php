<?php

namespace Wp01\Inc\Repository;

use Wp01\Inc\Dto\TaxonomyDto;
use Wp01\Inc\Util\ConvertUtil;
use Wp01\Inc\Util\Singleton;

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
