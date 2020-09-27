<?php

namespace Tests\Feature;
use Tests\TestCase;

use \App\Models\User;

class ApiTest extends TestCase
{
    /**
     * test giphy API if working fine.
     *
     * @test
     */
    public function giphy_api_return_data()
    {
        $url = "http://api.giphy.com/v1/gifs/search?q=test&offset=0&api_key=ZlxXfTTo5TZ8LXTyRJBZ8Ips98oAeKgK&limit=1";
        $data = json_decode(file_get_contents($url), true);
        $this->assertContains(200, $data['meta'], 'testArray ');
    }
}
