<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AcessandoLinksDeSitesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAcessandoLaravelDocs()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://laravel.com/')
                    ->clickLink('Documentation')
                    ->assertSee('composer global require laravel/installer')
                    ->assertTitleContains('Laravel');
        });
    }

    public function testAcessandoSiteDoBootstrap()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://getbootstrap.com/')
                    ->clickLink('Get started')
                    ->clickLink('Head to the downloads page')
                    ->clickLink('CSS files comparison')
                    ->clickLink('Only grid system')
                    ->assertSee('Use our powerful mobile-first flexbox grid to build layouts')
                    ->assertUrlIs('https://getbootstrap.com/docs/4.3/layout/grid/');
        });
    }
}
