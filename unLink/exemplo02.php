<?php


if(!is_dir("images"))mkdir("images");

// scandir le o diretorio e transforma em um array e apaga o arquivo 
foreach (scandir("images") as $item){
    if(!in_array($item, array(".",".."))){
        unlink("images/" . $item);
    }
}

echo "ok";



?>