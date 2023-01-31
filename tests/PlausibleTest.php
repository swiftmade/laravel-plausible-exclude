<?php

namespace Swiftmade\Plausible\Tests;

class PlausibleTest extends TestCase
{
    /** @test */
    public function it_can_render_the_plausible_view()
    {
        $response = $this->get('/plausible');

        $response->assertStatus(200);
        $response->assertViewIs('plausible::plausible');
        $response->assertSee('Exclude my visits');
    }
}
