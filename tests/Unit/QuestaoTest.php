<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Questao;

class QuestaoTest extends TestCase
{
    public function testTabelaQuestaoVazia() {
        $data = Questao::all();
        $this->assertEmpty($data);
    }

    public function testSalvarQuestao()
    {
        Questao::create([
            'tipo' =>'multipla_escolha',
            'pergunta' =>'Qual das alternativas não é uma linguagem de programação ?'
            ]);

        $data = Questao::all();
        $this->assertCount(1, $data);
    }

    public function testEditarQuestao()
    {
        $Questao = Questao::find(1);

        $this->assertEquals($Questao->tipo, 'multipla_escolha');
        $this->assertEquals($Questao->pergunta, 'Qual das alternativas não é uma linguagem de programação ?');

        $Questao->tipo = 'aberta';
        $Questao->pergunta = 'Oque é um Framework ?';
        $Questao->save();

        $Questao = Questao::find(1);

        $this->assertEquals($Questao->tipo, 'aberta');
        $this->assertEquals($Questao->pergunta, 'Oque é um Framework ?');
    }

    public function testDeleteQuestao()
    {
        $data = Questao::all();
        $this->assertCount(1, $data);

        $Questao = Questao::find(1);
        $Questao->delete();
        $data = Questao::all();
        $this->assertCount(0, $data);
    }
}
