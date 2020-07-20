<?php

// primero valor nome do arquivo ou url , segundo valor é o que quer fazer com esse arquivo

// $file = fopen("log.txt","w+"); se o arquivo nao existir ele cria


$file = fopen("log.txt","a+"); 

// escrever dentro do arquivo criado a cima 
fwrite($file, date("Y-m-d H:i:s") . "\r\n");


// fecho o arquivo 
fclose($file);

echo "arquivo criado com sucesso!";






?>