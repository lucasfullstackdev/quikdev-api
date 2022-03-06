<?php

namespace Repositories;

final class TrendsRepository extends TMDBRepository
{
    protected $endPoint = "trending/movie/week";
}
