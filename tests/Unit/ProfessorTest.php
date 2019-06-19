<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Professor;

class ProfessorTest extends TestCase
{
    public function testTabelaProfessorVazia() {
        $data = Professor::all();
        $this->assertEmpty($data);
    }

    public function testSalvarProfessor()
    {
        Professor::create([
            'nome'=> 'Alan Turing',
            'matricula'=> '82902531293',
            'email'=>'alanT@gmail.com'
        ]);
        $data = Professor::all();
        $this->assertCount(1, $data);
    }

    public function testEditarProfessor()
    {
        $professor = Professor::find(1);

        $this->assertEquals($professor->nome, 'Alan Turing');
        $this->assertEquals($professor->matricula, '82902531293');
        $this->assertEquals($professor->email, 'alanT@gmail.com');

        $professor->nome = 'Alan Turing';
        $professor->matricula = '87652340987';
        $professor->email = 'AlanT@gmail.com';
        $professor->save();

        $professor = Professor::find(1);

        $this->assertEquals($professor->nome, 'Alan Turing');
        $this->assertEquals($professor->matricula, '87652340987');
        $this->assertEquals($professor->email, 'AlanT@gmail.com');
    }

    public function testDeleteProfessor()
    {
        $data = Professor::all();
        $this->assertCount(1, $data);

        $professor = Professor::find(1);
        $professor->delete();
        $data = Professor::all();
        $this->assertCount(0, $data);
    }
}
