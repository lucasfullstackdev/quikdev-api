<?php

namespace Repositories;

final class MoviesRepository extends TMDBRepository
{

    public function findByName($params)
    {
        $this->endPoint = "search/movie";
        $this->params = http_build_query($params);

        return $this->get();
    }
}
