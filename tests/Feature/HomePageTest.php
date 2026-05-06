<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_homepage_renders_digitara_landing_page(): void
    {
        $response = $this->get('/');

        $response
            ->assertOk()
            ->assertSee('Digitara')
            ->assertSee('Engineering the')
            ->assertSee('Enterprise Web Systems')
            ->assertSee('Nexus Finance');
    }
}
