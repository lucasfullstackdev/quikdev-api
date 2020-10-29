<?php

namespace Repositories;

final class MoviesRepository extends TMDBRepository
{

    /**
     * Realiza a busca pelo título do filme
     *
     * @param [type] $params
     * @return void
     */
    public function findByName($params)
    {
        $this->endPoint = "search/movie";
        $this->params = http_build_query($params);

        return $this->get();
    }

    /**
     * Retorna uma lista de filmes pelo gênero
     *
     * @param [type] $id
     * @return void
     */
    public function findByGenre($id)
    {
        $this->endPoint = "discover/movie";
        $this->params = "&with_genres=$id";

        return $this->get();
    }

    /**
     * Retorna o filme em específico
     *
     * @param [type] $id
     * @return void
     */
    public function find($id)
    {
        $this->endPoint = "movie/$id";
        return $this->get();
    }
}
