<?php

namespace Tests\Unit\Repository;

use Tests\TestCase;
use Repositories\GenresRepository;

class GenresTest extends TestCase
{
    public function testListAllGenres()
    {
        // https://api.themoviedb.org/3/genre/movie/list?api_key=4ec327e462149c3710d63be84b81cf4f&language=pt-BR
        $genresRepository = new GenresRepository;
        $response = $genresRepository->get();

        $this->assertIsArray($response);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(200, $response['code']);

        $this->assertArrayHasKey('data', $response);
        $this->assertIsArray($response['data']);

        $this->assertArrayHasKey('genres', $response['data']);
        $this->assertIsArray($response['data']['genres']);
    }
}
