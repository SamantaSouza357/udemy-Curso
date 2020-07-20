<?php

require_once("config.php");

$sql = new Sql();

 $usuarios = $sql->select("SELECT * FROM usuarios ORDER BY nome");

$header = array();


foreach($usuarios[0] as $key => $value){
    array_push($header,ucfirst($key));
}

$file = fOpen("usuarios.csv", "w+");

fwrite($file, implode(",",$header) . "\r\n");

foreach($usuarios as $row){

    $data = array();

    foreach($row as $key => $value){

        array_push($data, $value);

    }

    fwrite($file,  implode(",",$data) . "\r\n");

} //end foreach de linha

fclose($file);



?>