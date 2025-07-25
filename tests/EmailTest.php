<?php

namespace Alura\Arquitetura\Testes;

use Alura\Arquitetura\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testEmailFormatoInvalidoNaoDevePoderExistir()
    {
        $this->expectException(\InvalidArgumentException::class);
        new Email('email inválido');
    }

    public function testEmailDevePoderSerRepresentadoComoString()
    {
        $email = new Email('endereco@example.com');
        $this->assertSame('endereco@example.com', (string) $email);
    }
}