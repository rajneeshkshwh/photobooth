<?php
    // echo $_POST['path'];
    define('UPLOAD_DIR', 'images/');
    $image_parts = explode(";base64,", $_POST['path']);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = UPLOAD_DIR . uniqid() . '.png';
    file_put_contents($file, $image_base64);
    echo $file;
    return $file;
?>