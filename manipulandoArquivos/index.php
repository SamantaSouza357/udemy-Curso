<?php

$images = scandir("images");

$data = array();

foreach($images as $img){
    if(!in_array($img, array(".",".."))){

        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);

        $info["size"] = filesize($filename);
        // filesize pega o tamanho do arquivo em bayt

        $info["modifield"] = date("d/m/Y H:i:s", filemtime($filename));

        // ultima modificação do arquivo

        $info["url"] = "http://localhost/cursoUdemyManipulandoArquivos/manipulandoArquivos/" . str_replace("\\","/",$filename);

        // str_replace manipular a barra

        array_push($data,$info);
    }
}

echo json_encode($data);




?>