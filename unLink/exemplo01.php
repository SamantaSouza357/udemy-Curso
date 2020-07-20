<?php

$file = fopen("teste.txt", "w+");

fclose($file);

// echo "arquivo criado com sucesso";

unlink("teste.txt");

echo "arquivo deletado com sucesso";




?>