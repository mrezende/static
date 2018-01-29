<?php
require 'Conta.php';

echo "Contador: " . Conta::$contador . PHP_EOL;





$conta1 = Conta::criaConta();

$conta2 = Conta::criaConta();

echo "Contador: " . Conta::$contador . PHP_EOL;
