<?php

declare(strict_types=1);

/*PDO = Extensão do PHP que permite a conexão com diversos bancos de dados relacionais */

$pdo = new PDO(
    'pgsql:host=relacional;dbname=postgres',
        'postgres',
            'senha_postgres',
);

var_dump($pdo);