<?php

namespace Tests\Unit;

use Tests\TestCase;

class BaseTestCase extends TestCase
{
    protected const KEYS_ON_ITEM = [
        'original_language',
        'original_title',
        'poster_path',
        'video',
        'id',
        'overview',
        'release_date',
        'vote_count',
        'vote_average',
        'adult',
        'backdrop_path',
        'title',
        'popularity'
    ];

    protected final function assertArrayHasKeys(array $keys, array $array): void
    {
        foreach ($keys as $key) {
            $this->assertArrayHasKey($key, $array);
        }
    }

    protected final function assertResponseStructure(array $response): void
    {
        $this->assertIsArray($response);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);

        $this->assertArrayHasKey('code', $response);
        $this->assertEquals(200, $response['code']);

        $this->assertArrayHasKey('data', $response);
        $this->assertIsArray($response['data']);

        $this->assertArrayHasKeys(['page', 'results', 'total_pages', 'total_results'], $response['data']);

        $this->assertIsArray($response['data']['results']);
    }

}
