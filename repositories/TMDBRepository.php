<?php

namespace Repositories;

use Illuminate\Support\Facades\Http;

/**
 * Busca por nome
 * https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&query=infinito
 * 
 * Filtro por gênero
 * https://api.themoviedb.org/3/discover/movie?api_key=4ec327e462149c3710d63be84b81cf4f&with_genres=28
 */
class TMDBRepository
{
    private $apiUrl;
    private $apiKey;
    protected $endPoint;
    protected $params;
    protected $urlRequest;

    public function __construct()
    {
        $this->apiUrl = env('TMDB_API_URL');
        $this->apiKey = env('TMDB_API_KEY');
    }

    public final function get()
    {
        $this->prepUrl();

        $response = Http::get($this->urlRequest);
        return Response::bind($response);
    }

    private function prepUrl()
    {
        $this->urlRequest = "$this->apiUrl/$this->endPoint?api_key=$this->apiKey&language=pt-BR";
        if ($this->params) {
            $this->urlRequest .= "&$this->params";
        }
    }
}
