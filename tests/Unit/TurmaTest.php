<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Turma;

class TurmaTest extends TestCase
{
    public function testTabelaTurmaVazia() {
        $data = Turma::all();
        $this->assertEmpty($data);
    }

    public function testSalvarTurma()
    {
        Turma::create([
            'curso'=>'Técnico em Informática',
            'campus'=>'Garanhuns'
        ]);

        $data = Turma::all();
        $this->assertCount(1, $data);
    }

    public function testEditarTurma()
    {
        $Turma = Turma::find(1);

        $this->assertEquals($Turma->curso, 'Técnico em Informática');
        $this->assertEquals($Turma->campus, 'Garanhuns');

        $Turma->curso = 'Sistemas da Informação';
        $Turma->campus = 'Garanhuns';
        $Turma->save();

        $Turma = Turma::find(1);

        $this->assertEquals($Turma->curso, 'Sistemas da Informação');
        $this->assertEquals($Turma->campus, 'Garanhuns');
    }

    public function testDeleteTurma()
    {
        $data = Turma::all();
        $this->assertCount(1, $data);

        $Turma = Turma::find(1);
        $Turma->delete();
        $data = Turma::all();
        $this->assertCount(0, $data);
    }
}
