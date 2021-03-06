<?php
/**
 * User: candidosouza
 * Date: 13/08/14
 * Time: 08:15
 * 04 - Projeto Persistência de dados | Estudos Potal Code Education - Módulo 03 Php Orientado a Objetos
 * @author Candido Souza
 * Arquivo: index.php
 * Linguagem: php
 */
require_once __DIR__ . '/bootstrap.php';

require_once  __DIR__ . '/../src/CandidoSouza/Applications/pages/header.php';
//require_once  __DIR__ . '/../src/CandidoSouza/Applications/Config/Route.php';

use \CandidoSouza\Classes\Configs\Route;
$router = new Route();
require_once($router->Routing());


require_once __DIR__ . '/../src/CandidoSouza/Applications/pages/footer.php';
