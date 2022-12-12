<?php

namespace Theme\Boot\Http\Repository;

use Theme\Boot\Http\Dto\AuthorDto;
use Theme\Boot\Http\Util\ConvertUtil;
use Theme\Boot\Http\Util\Singleton;
use WP_User_Query;

class AuthorRepository
{
    use Singleton;

    /**
     * @desc
     * @param array $authorIds
     * @return AuthorDto[]
     */
    public function queryAuthors(array $authorIds) : array
    {
        $params = [
            'include' => $authorIds
        ];

        // The Query
        $user_query = new WP_User_Query($params);

        $map = [];

        // User Loop
        if ( !empty($user_query->get_results())) {
            foreach ($user_query->get_results() as $user) {
                $dto                = ConvertUtil::convertAuthorDto($user);
                $map[$dto->getId()] = $dto;
            }
        }

        return $map;
    }

}
