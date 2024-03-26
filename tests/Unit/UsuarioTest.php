<?php

namespace Tests\Unit;

use App\Models\Usuario;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UsuarioTest extends TestCase
{
    use RefreshDatabase;

    public function testCrearUsuario()
    {
        $usuario = Usuario::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->assertInstanceOf(Usuario::class, $usuario);
        $this->assertDatabaseHas('usuarios', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);
    }

    public function testActualizarUsuario()
    {
        $usuario = Usuario::create([
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'password' => bcrypt('password'),
        ]);

        $usuario->name = 'Jane Smith';
        $usuario->save();

        $this->assertEquals('Jane Smith', $usuario->name);
    }

    public function testEliminarUsuario()
    {
        $usuario = Usuario::create([
            'name' => 'James Doe',
            'email' => 'james@example.com',
            'password' => bcrypt('password'),
        ]);
    
        $usuario->delete();
    
        $this->assertDatabaseMissing('usuarios', [
            'email' => 'james@example.com',
        ]);
    }
    
}
