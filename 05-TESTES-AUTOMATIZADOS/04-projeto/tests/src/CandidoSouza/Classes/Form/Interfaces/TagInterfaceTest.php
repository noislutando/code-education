<?php

/**
 * @author Candido Souza
 * Date: 08/10/14
 * 04 - Projeto | Módulo 05 - Testes Automatizados | Estudos Potal Code Education
 * Linguagem: php
 */

namespace CandidoSouza\Classes\Form\Interfaces;

class TagInterfaceTest extends \PHPUnit_Framework_TestCase
{
    public function testIfThereChecksInterface()
    {
        $this->assertTrue(interface_exists($interface = 'CandidoSouza\Classes\Form\Interfaces\TagInterface'),
                "Interface not Foud: A Interface {$interface} não existe");
    }
}
