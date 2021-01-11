<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileInfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileInfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;


?>

<img src="<?= $base64encode ?>">

<a href="<?= $base64encode ?>" target="_blank">Link para imagem</a>