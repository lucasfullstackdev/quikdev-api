<?php

namespace Tests\Unit\Repository;

use Repositories\MoviesRepository;
use Repositories\TrendsRepository;
use Tests\Unit\BaseTestCase;

class MoviesTest extends BaseTestCase
{

    /** @var MoviesRepository */
    private $moviesRepository;

    /** @var TrendsRepository */
    private $trendsRepository;

    public function setUp(): void
    {
        $this->moviesRepository = new MoviesRepository;
        $this->trendsRepository = new TrendsRepository;
    }

    public function testGetTrends(): void
    {
        // https://api.themoviedb.org/3/trending/movie/week?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR
        $response = $this->trendsRepository->get();
        $this->assertResponseStructure($response);

        $lastItem = end($response['data']['results']);
        $this->assertIsArray($lastItem);
        $this->assertArrayHasKeys([...self::KEYS_ON_ITEM, ...['media_type', 'genre_ids']], $lastItem);
    }

    public function testGetMovieByName(): void
    {
        // https://api.themoviedb.org/3/search/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR&query=bat
        $response = $this->moviesRepository->findByName(['query' => 'bat']);
        $this->assertResponseStructure($response);

        $lastItem = end($response['data']['results']);
        $this->assertIsArray($lastItem);
        $this->assertArrayHasKeys([...self::KEYS_ON_ITEM, ...['genre_ids']], $lastItem);
    }

    public function testGetMovieByGenre(): void
    {
        // https://api.themoviedb.org/3/discover/movie?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR&&with_genres=10770
        $response = $this->moviesRepository->findByGenre(53);
        $this->assertResponseStructure($response);

        $lastItem = end($response['data']['results']);
        $this->assertIsArray($lastItem);
        $this->assertArrayHasKeys([...self::KEYS_ON_ITEM, ...['genre_ids']], $lastItem);
    }

    public function testFindMovieById(): void
    {
        $response = $this->moviesRepository->find(2);

        $this->assertIsArray($response);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(200, $response['code']);

        $this->assertArrayHasKey('data', $response);
        $this->assertIsArray($response['data']);

        $this->assertArrayHasKeys(self::KEYS_ON_ITEM, $response['data']);

        $response = $this->moviesRepository->find(1);
        $this->assertFalse($response['success']);
        $this->assertEquals(404, $response['code']);
    }
}
