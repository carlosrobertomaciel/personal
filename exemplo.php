<?php

require_once "vendor/autoload.php";

use crmtec\cepdigital\Search;

$busca = new Search;

$resultado = $busca->getEnderecoPeloCEP('22411030');

print_r($resultado);