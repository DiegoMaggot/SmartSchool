<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Alternativa;

class AlternativaTest extends TestCase
{
    public function testTabelaAlternativaVazia() {
        $data = Alternativa::all();
        $this->assertEmpty($data);
    }

    public function testSalvarAlternativa()
    {
        Alternativa::create([
            'texto'=>'PHP'
        ]);
        $data = Alternativa::all();
        $this->assertCount(1, $data);
    }

    public function testEditarAlternativa()
    {
        $Alternativa = Alternativa::find(1);

        $this->assertEquals($Alternativa->texto, 'PHP');

        $Alternativa->texto = 'Laravel';
        $Alternativa->save();
        $Alternativa = Alternativa::find(1);

        $this->assertEquals($Alternativa->texto, 'Laravel');
    }

    public function testDeleteAlternativa()
    {
        $data = Alternativa::all();
        $this->assertCount(1, $data);

        $Alternativa = Alternativa::find(1);
        $Alternativa->delete();
        $data = Alternativa::all();
        $this->assertCount(0, $data);
    }
}
