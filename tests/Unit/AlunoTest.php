<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Aluno;

class AlunoTest extends TestCase
{
    public function testTabelaAlunoVazia() {
        $data = Aluno::all();
        $this->assertEmpty($data);
    }

    public function testSalvarAluno()
    {
        Aluno::create([
            'nome'=>'Diego Pereira',
            'matricula'=>'20172D13GR000',
            'email'=>'diegopereira@outlook.com'
        ]);
        $data = Aluno::all();
        $this->assertCount(1, $data);
    }

    public function testEditarAluno()
    {
        $aluno = Aluno::find(1);

        $this->assertEquals($aluno->nome, 'Diego Pereira');
        $this->assertEquals($aluno->matricula, '20172D13GR000');
        $this->assertEquals($aluno->email, 'diegopereira@outlook.com');

        $aluno->nome = 'Diego Sobral';
        $aluno->matricula = '20172D13GR123';
        $aluno->email = 'diegopereira@outlook.com';
        $aluno->save();

        $aluno = Aluno::find(1);

        $this->assertEquals($aluno->nome, 'Diego Sobral');
        $this->assertEquals($aluno->matricula, '20172D13GR123');
        $this->assertEquals($aluno->email, 'diegopereira@outlook.com');
    }

    public function testDeleteAluno()
    {
        $data = Aluno::all();
        $this->assertCount(1, $data);

        $aluno = aluno::find(1);
        $aluno->delete();
        $data = aluno::all();
        $this->assertCount(0, $data);
    }
}
