<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class VisitSitesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testSiteDoProfessor()
    {
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('https://sites.google.com/site/elmano/teaching')
                        ->clickLink('Teste de Software')
                        ->assertSee('2019.1 Teste de Software');
            });
        }
    }

    public function testSiteDoLaravel()
    {
        {
            $this->browse(function (Browser $browser) {
                $browser->visit('https://laravel.com/')
                        ->assertSee('The PHP Framework For Web Artisans');
            });
        }
    }
}
