<?php
/**
 * User: candidosouza
 * Date: 13/08/14
 * Time: 08:15
 * 04 - Projeto Persistência de dados | Estudos Potal Code Education - Módulo 03 Php Orientado a Objetos
 * @author Candido Souza
 * Arquivo: ClientesPessoasJuridicas.php
 * Linguagem: php
 */

namespace CandidoSouza\Classes\Clientes\Types;
use CandidoSouza\Classes\Clientes\Interfaces\EndCobrancaInterface;


/**
 * Class ClientesPessoasJuridicas
 * @package CandidoSouza\Clientes\Types;
 */
class ClientesPessoasJuridicas extends Clientes
{
    protected  $fax;
    private $connect;

    public function __construct($connect) {
        $this->connect = $connect;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

} 