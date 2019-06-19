<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Avaliacao;

class AvaliacaoTest extends TestCase
{
    public function testTabelaAvaliacaoVazia() {
        $data = Avaliacao::all();
        $this->assertEmpty($data);
    }

    public function testSalvarAvaliacao()
    {
        Avaliacao::create([
            'titulo'=>'Prova 1° unidade',
            'assunto'=>'Linguagens de Programação'
        ]);

        $data = Avaliacao::all();
        $this->assertCount(1, $data);
    }

    public function testEditarAvaliacao()
    {
        $avaliacao = Avaliacao::find(1);

        $this->assertEquals($avaliacao->titulo, 'Prova 1° unidade');
        $this->assertEquals($avaliacao->assunto, 'Linguagens de Programação');

        $avaliacao->titulo = 'Prova 1° unidade';
        $avaliacao->assunto = 'Lógica de Programação';
        $avaliacao->save();

        $avaliacao = avaliacao::find(1);

        $this->assertEquals($avaliacao->titulo, 'Prova 1° unidade');
        $this->assertEquals($avaliacao->assunto, 'Lógica de Programação');
    }

    public function testDeleteavaliacao()
    {
        $data = avaliacao::all();
        $this->assertCount(1, $data);

        $avaliacao = avaliacao::find(1);
        $avaliacao->delete();
        $data = avaliacao::all();
        $this->assertCount(0, $data);
    }
}
